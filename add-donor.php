<?php
include 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';

// This script is used to update status in database
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $sql = "UPDATE `donor` SET `donor_status` = ? WHERE `donor_id` = ?";
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
            <li><a href="add-donor.php">Donor</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="header">
            <span>Add New Donor</span>
        </div>

        <div class="body">
            <form action="" method="post">
                <div class="form-control">
                    <label for="emp_id">Employee ID<span class="required">*</span></label>
                    <input type="number" id="emp_id" name="emp_id" min="1001" autocomplete="off" autofocus required>
                </div>

                <div class="form-control">
                    <label for="donor_name">Donor Name<span class="required">*</span></label>
                    <input type="text" id="donor_name" name="donor_name" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="contact_no">Contact No<span class="required">*</span></label>
                    <input type="number" id="contact_no" name="contact_no" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="blood_group">Blood Group<span class="required">*</span></label>
                    <select name="blood_group" id="blood_group" required>
                        <option selected disabled>Select blood group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="gender">Gender<span class="required">*</span></label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" id="Male" value="Male" required>Male</label>
                        <label><input type="radio" name="gender" id="Female" value="Female" required>Female</label>
                    </div>
                </div>

                <div class="form-control">
                    <label for="dob">Date of Birth<span class="required">*</span></label>
                    <input type="date" id="dob" name="dob" max="<?php echo date('Y-m-d'); ?>" autocomplete="off"
                        required>
                </div>

                <div class="form-control">
                    <label for="designation">Designation<span class="required">*</span></label>
                    <select name="designation" id="designation" required>
                        <option selected disabled>Select designation</option>
                        <?php
                        $sql_fetch = "SELECT designation,designation_status FROM `designation` WHERE designation_status = 1 ORDER BY designation ASC";
                        $result = mysqli_query($conn, $sql_fetch);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['designation'] . "'>" . $row['designation'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-control">
                    <label for="city">Select City<span class="required">*</span></label>
                    <select id="city" name="city" required>
                        <option selected disabled>Select city</option>
                        <?php
                        $sql_fetch = "SELECT city,city_status FROM `city` WHERE city_status = 1 ORDER BY city ASC";
                        $result = mysqli_query($conn, $sql_fetch);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['city'] . "'>" . $row['city'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-control">
                    <label for="outlet">Select Outlet<span class="required">*</span></label>
                    <select id="outlet" name="outlet" required>
                        <option selected disabled>Select outlet</option>
                    </select>
                </div>

                <div class="form-btn">
                    <button type="submit" name="donor-submit" class="success-btn">Submit</button>
                    <button type="reset" class="danger-btn">Reset</button>
                </div>
            </form>

        </div>

    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="header">
            <span>Designation List</span>

            <div class="header-filter">
                <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search" autocomplete="off">
                
                <select id="rowsPerPage" style="width: 70px;">
                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

        </div>

        <div class="body">

            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Conatct No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blood Group</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Designation</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200" id="tableBody">

                    <?php
                    $sql = "SELECT * FROM `donor` ORDER BY 	donor_blood_group ASC, donor_designation ASC, donor_id ASC"; // Query to fetch data
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Check if data exists
                    
                        $serial_no = 1; // Initialize serial number
                    
                        while ($row = $result->fetch_assoc()) { // Fetch rows and display in table
                            ?>

                            <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['donor_id']; ?>">
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $serial_no; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['donor_emp_id']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['donor_name']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['donor_contact']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['donor_blood_group']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['donor_designation']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-blue-600'>
                                    <?php 
                                    if ($row['donor_status'] == 1) { 

                                        $status = "checked"; 
                                    } else { 
                                        $status = ""; 
                                    } 

                                    ?>
                                        <div class="checkbox-wrapper-51">
                                        <input type="checkbox" id="id-<?php echo $row['donor_id']; ?>" data-id="<?php echo $row['donor_id']; ?>" onclick="sendToPHP(this)" <?php echo $status; ?>>
                                        <label class="toggle" for="id-<?php echo $row['donor_id']; ?>" data-id="id-<?php echo $row['donor_id']; ?>" onclick="toggleStatus(this)">
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
                                    <button class='updateButton tab-btn' data-id='<?php echo $row['donor_id']; ?>'><span class='material-symbols-outlined'>edit_square</span></button>
                                    <button class='deleteButton tab-btn' onclick='openPopup()'><span class='material-symbols-outlined'>delete</span></button>
                                </td>
                            </tr>
                            <?php
                            $serial_no++; // Increment serial number
                        }
                    } else {
                        ?>
                        <tr>
                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500' colspan='8'>No Data Found</td>
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

    <!-- This div contain record delete conformation popup  -->
    <div class="popup-overlay" id="popup">
        <div class="popup">
            <h2>Confirm Delete</h2>
            <p>Are you sure you want to delete this record? This action cannot be undone.</p>

            <form method="post">
                <input type="text" id="deletedonorid" name="deletedonorid" hidden>
                <button class="confirm-btn" name="delete-donor">Yes, Delete</button>
                <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
            </form>
        </div>
    </div>

    <script> 
        document.querySelectorAll('.updateButton').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id'); // Get the ID from the data-id attribute
                // Redirect to update.php with the ID as a query parameter
                window.location.href = `donor-update.php?id=${id}`;
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
                deletedonorid.value = rowId1;
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

        // This function is used to send edit id to update-donor page
        document.getElementById('city').addEventListener('change', function () {
            var cityId = this.value;
            if (cityId) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'fetch_outlets.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById('outlet').innerHTML = xhr.responseText;
                    }
                };
                xhr.send('city_id=' + cityId);
            } else {
                document.getElementById('outlet').innerHTML = '<option value="">Select an Outlet</option>';
            }
            // alert(cityId);
        });
    </script>

<?php
include 'footer.php';
?>