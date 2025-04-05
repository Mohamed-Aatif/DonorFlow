<?php
require 'update-header.php';
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
            <li class="separator">/</li>
            <li><a href="add-requirement.php">Request</a></li>
            <li class="separator">/</li>
            <li><a href="requirement-list.php?id=<?php echo $_GET['id']; ?>">Request Details</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="header">
            <span>Request Details</span>
        </div>


        <div class="body">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Query to fetch details for the selected ID
                $query = "SELECT * FROM `request` WHERE `request_id` = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $request_id = $row['requested_id'];
                    ?>

                    <table class="min-w-full divide-y divide-gray-200 detail-table" id="myTable">
                        <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                            <tr>
                                <!-- <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Requested ID</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'><?php // echo $request_id; ?></td> -->
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Requested Date</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'><?php echo $row['request_date']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Source</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <?php echo $row['request_source']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Contact No</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <?php echo $row['request_contact']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Name</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'><?php echo $row['request_name']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>No of Doner Request
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <?php echo $row['request_no_of_donoes']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>No of Donor Arranged
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <?php echo $row['request_no_of_donoes']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Blood Group</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium highlight'>
                                    <?php echo $row['request_blood_group']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Hospital Name</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <?php echo $row['request_hospital']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>Location</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                                    <p class='details-data'><?php echo $row['request_location']; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php

                } else {
                    ?>

                <table class="min-w-full divide-y divide-gray-200" id="myTable">
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        <tr>
                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>No Record Found.</td>
                        </tr>
                    </tbody>
                </table>


                <?php
                }
                ?>

        </div>
        <?php
            }
            ?>
    </div>

    <br>

    <div class="container">

        <div class="header">
            <span>Donor Details</span>
        </div>


        <div class="body">

            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Donation Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Donor Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Outlet</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Designation</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reporting Manager</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blood Group</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                    <?php
                    $sql = "SELECT * FROM `donation_record` WHERE `donation_request_id` = $request_id ORDER BY donation_id ASC"; // Query to fetch data
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Check if data exists
                    
                        $serial_no = 1; // Initialize serial number
                    
                        while ($row = $result->fetch_assoc()) { // Fetch rows and display in table
                            ?>
                            <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['donation_id']; ?>">
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>1</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_date']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_emp_id']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_name']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_outlet']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_designation']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_reporting_manager']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <?php echo $row['donation_blood_group']; ?>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>
                                    <button class='deleteButton tab-btn' onclick='openPopup()'><span class='material-symbols-outlined'>delete</span></button>
                                </td>
                            </tr>
                            <?php
                            $serial_no++; // Increment serial number
                        }
                    } else {
                        ?>
                        <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['donation_id']; ?>">
                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500' colspan='8'>No Data Found.</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</main>
<!-- main end -->

<!-- This div contain record delete conformation popup  -->
<div class="popup-overlay" id="popup">
    <div class="popup">
        <h2>Confirm Delete</h2>
        <p>Are you sure you want to delete this record? This action cannot be undone.</p>

        <form method="post">
            <input type="text" id="deletedonorid" name="deletedonorid" hidden>
            <button class="confirm-btn" name="delete-donor-donation">Yes, Delete</button>
            <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
        </form>
    </div>
</div>

<script>
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
</script>

<?php
include 'footer.php';
?>