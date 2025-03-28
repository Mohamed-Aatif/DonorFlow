<?php
require 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';


// This script is used to update status in database
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $sql = "UPDATE `designation` SET designation_status = ? WHERE designation_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $status, $id);
    $stmt->execute();
}
?>

    <!-- main start -->
    <main>

        <div class="breadcrumb-container">
            <ul class="breadcrumbs">
                <li><a href="dashboard.php">Home</a></li>
                <li class="separator">/</li> <!-- › -->
                <li><a href="add-designation.php">Designation</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="header">
                <span>Add New designation</span>
            </div>

            <div class="body">
                <form action="" method="post">
                    <div class="form-control">
                        <label for="designation">Designation<span class="required">*</span></label>
                        <input type="text" id="designation" name="designation" autocomplete="off" required autofocus>
                    </div>

                    <div class="form-btn">
                        <button type="submit" name="designation-submit" class="success-btn">Submit</button>
                        <button type="reset" class="danger-btn">Reset</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="header">
                <span>Designation List</span>

                <select id="rowsPerPage" style="width: 70px;">
                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <div class="body">

                <table class="min-w-full divide-y divide-gray-200" id="myTable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">designation</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">

                        <?php
                        $sql = "SELECT * FROM `designation`"; // Query to fetch data
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) { // Check if data exists
                        
                            $serial_no = 1; // Initialize serial number
                        
                            while ($row = $result->fetch_assoc()) { // Fetch rows and display in table
                                ?>
                                
                                <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['designation_id']; ?>">
                                    <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $serial_no; ?></td>
                                    <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['designation']; ?></td>
                                    <td class='px-6 py-4 whitespace-nowrap text-sm text-blue-600'>
                                        <?php if ($row['designation_status'] == 1) { $status = 'checked'; } else { $status = ''; } ?><div class="checkbox-wrapper-51">
                                            <input type="checkbox" id="id-<?php echo $row['designation_id']; ?>" data-id="<?php echo $row['designation_id']; ?>" onclick="sendToPHP(this)" <?php echo $status; ?>>
                                            <label class="toggle" for="id-<?php echo $row['designation_id']; ?>" data-id="id-<?php echo $row['designation_id']; ?>" onclick="toggleStatus(this)">
                                                <span>
                                                    <svg viewBox="0 0 10 10" height="10px" width="10px">
                                                        <path
                                                            d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class='px-6 py-4 whitespace-nowrap text-sm text-blue-600'>
                                        <button class='editButton tab-btn' onclick='openEditPopup()'><span class='material-symbols-outlined'>edit_square</span></button>
                                        <button class='deleteButton tab-btn' onclick='openPopup()'><span class='material-symbols-outlined'>delete</span></button>
                                    </td>
                                </tr>
                                <?php
                                $serial_no++; // Increment serial number
                            }
                        } else {
                            ?>
                            <tr>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500' colspan='4'>No Data Found</td>
                            </tr>
                            <?php
                        }
                        
                        mysqli_close($conn); // Close the connection (optional but recommended)
                        ?>

                    </tbody>
                </table>
                <div id="pagination" class="pagination"></div>
            </div>
            <div id="response"></div>
        </div>

    </main>

    <!-- main end -->

    <!-- This tag push status update success notification  -->
    <div id="notification" class="status-ntf notification success"></div>

    <!-- This div contain update form & popup modal  -->
    <div class="popup-overlay" id="editpopup">
        <div class="container modal-container">
            <div class="header">
                <span>Update Designation</span>
            </div>
            <div class="body">
                <form id="editForm" method="post">
                    <input type="text" id="designationid" name="designationid" hidden>
                    <div class="form-control">
                        <label for="designationupdate">designation</label>
                        <input type="text" id="designationupdate" name="designationupdate" autocomplete="off" required>
                    </div>
                    <div class="form-btn">
                        <button type="submit" name="designation-update" class="success-btn">Submit</button>
                        <button type="button" onclick="closeEditPopup()" class="danger-btn" id="closeButton">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- This div contain record delete conformation popup  -->
    <div class="popup-overlay" id="popup">
        <div class="popup">
            <h2>Confirm Delete</h2>
            <p>Are you sure you want to delete this record? This action cannot be undone.</p>

            <form method="post">
                <input type="text" id="deletedesignationid" name="deletedesignationid" hidden>
                <button class="confirm-btn" name="delete-designation">Yes, Delete</button>
                <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
            </form>
        </div>
    </div>

    <script> 
        // This script is used to open update popup and get data from row with row id
        const editpopup = document.getElementById('editpopup');
        const editButtons = document.querySelectorAll(".editButton");
        const designationupdate = document.getElementById("designationupdate");
        
        // This function get data based on row id on edit button click 
        editButtons.forEach(button => {
            button.addEventListener("click", function () {
                const row = this.parentElement.parentElement; // Get the clicked button's row 
                const designation = row.cells[1].innerText; // Extract the data from the row's cells
                const rowId = row.id; // Extract the data from <tr> id 
                
                designationupdate.value = designation; // Populate the form with the row's data
                designationid.value = rowId; // Populate the form with the row's data
                // console.log("Row ID:", rowId); // This is used to debug in console 
            });
        });
        
        // This script is used to open delete conformation popup and get row id
        const popup = document.getElementById('popup');
        const deleteButtons = document.querySelectorAll(".deleteButton");

        // This function get row id on delete button click 
        deleteButtons.forEach(button => {
            button.addEventListener("click", function () {
                const row = this.parentElement.parentElement;
                const rowId1 = row.id;
                deletedesignationid.value = rowId1;
            });
        });

        // This function is used to update status using AJAX
        function sendToPHP(checkbox) {
            const id = checkbox.getAttribute('data-id');
            const status = checkbox.checked ? 1 : 0;

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    showNotification('Success! Status updated successfully!');
                }
            };
            xhr.send(`id=${id}&status=${status}`);
        }
    </script>


<?php
include 'footer.php';
?>