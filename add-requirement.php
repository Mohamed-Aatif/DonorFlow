<?php
require 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';

?>

<!-- main start -->

<main>

    <div class="breadcrumb-container">
        <ul class="breadcrumbs">
            <li><a href="dashboard.php">Home</a></li>
            <li class="separator">/</li> <!-- › -->
            <li><a href="add-requirement.php">Request</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="header">
            <span>Add New Request</span>
        </div>

        <div class="body">
            <form action="" method="post">

                <div class="form-control">
                    <label for="requested_date">Requested Date<span class="required">*</span></label>
                    <input type="date" id="requested_date" name="requested_date" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="source">Source<span class="required">*</span></label>
                    <input type="text" id="source" name="source" list="source-list" autocomplete="off">
                    <datalist id="source-list">
                        <?php
                        $sql_fetch = "SELECT source,source_status FROM `source` WHERE source_status = 1 ORDER BY source ASC";
                        $result = mysqli_query($conn, $sql_fetch);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['source'] . "'>";
                            }
                        }
                        ?>
                    </datalist>
                </div>

                <div class="form-control">
                    <label for="contact_no">Contact No</label>
                    <input type="number" id="contact_no" name="contact_no" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="blood_group">Blood Group</label>
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
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="no_of_donors">No of Donors</label>
                    <input type="number" id="no_of_donors" name="no_of_donors" min="0" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="hospital_name">Hospital Name</label>
                    <input type="text" id="hospital_name" name="hospital_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" autocomplete="off">
                </div>

                <div class="form-btn">
                    <button type="submit" name="request-submit" class="success-btn">Submit</button>
                    <button type="reset" class="danger-btn">Reset</button>
                </div>

            </form>

        </div>

    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="header">
            <span>Request List</span>
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
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requested Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Source</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blood Group</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No of Doners</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hospital Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200" id="tableBody">

                    <?php
                    $sql = "SELECT * FROM `request` ORDER BY `request_date` DESC"; // Query to fetch data
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Check if data exists
                    
                        $serial_no = 1; // Initialize serial number
                    
                        while ($row = $result->fetch_assoc()) { // Fetch rows and display in table
                            ?>

                            <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['request_id']; ?>">
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $serial_no; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['requested_id']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_date']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_source']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_contact']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_name']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_blood_group']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_no_of_donoes']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_hospital']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_location']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-blue-600'>
                                    <button class='updateButton tab-btn' data-id='<?php echo $row['request_id']; ?>'><span class='material-symbols-outlined'>more_horiz</span></button>
                                    <!-- <button class='editButton tab-btn' onclick='openEditPopup()'><span class='material-symbols-outlined'>more_horiz</span></button> -->
                                    <!-- <button class='deleteButton tab-btn' onclick='openPopup()'><span class='material-symbols-outlined'>delete</span></button> -->
                                </td>
                            </tr>
                            <?php
                            $serial_no++; // Increment serial number
                        }
                    } else {
                        ?>
                        <tr>
                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500' colspan='9'>No Data Found</td>
                        </tr>
                        <?php
                    }

                    mysqli_close($conn); // Close the connection (optional but recommended)
                    ?>

                </tbody>
            </table>
            <div id="pagination" class="pagination"></div>
        </div>
    </div>

</main>
<!-- main end -->

<script>
document.querySelectorAll('.updateButton').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id'); // Get the ID from the data-id attribute
        // Redirect to update.php with the ID as a query parameter
        window.location.href = `add-donation.php?id=${id}`;
    });
});
</script>

<?php
include 'footer.php';
?>