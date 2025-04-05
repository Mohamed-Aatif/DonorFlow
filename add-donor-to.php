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
            <li><a href="add-donor-to.php?id=<?php echo $_GET['id']; ?>">Add Donor</a></li>
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
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium'><?php echo $row['requested_id']; ?></td> -->
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
            <span>Add Donor</span>
        </div>

        <div class="body">

            <form action="" method="post">
                <div class="form-control">
                    <label for="empl_id">Employee ID<span class="required">*</span></label>
                    <input type="number" id="empl_id" name="empl_id" min="1" autocomplete="off" value="<?php if (isset($_POST['fetch_data'])) {
                        echo $_POST['empl_id'];
                    } ?>" autofocus required>
                    <button type="submit" name="fetch_data" class="form-filter-btn">Search</button>
                </div>
            </form>


            <form action="add-requirement.php" method="post" enctype="multipart/form-data">

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fetch_data'])) {
                    $empl_id = $_POST['empl_id'];

                    $sql_fetch = "SELECT * FROM `donor` WHERE `donor_emp_id` = $empl_id";
                    $result = mysqli_query($conn, $sql_fetch);

                    if ($result->num_rows > 0) {


                        while ($row = $result->fetch_assoc()) {
                            $donor_emp_id = $row['donor_emp_id'];
                            $donor_name = $row['donor_name'];
                            $donor_contact = $row['donor_contact'];
                            $donor_outlet = $row['donor_outlet'];
                            $donor_designation = $row['donor_designation'];
                            $donor_blood_group = $row['donor_blood_group'];
                        }
                        ?>
                        <div class="form-control">
                            <input type="hidden" id="request_id" name="request_id" value="<?php echo $request_id; ?>">
                            <input type="hidden" id="employee_id" name="employee_id" value="<?php echo $donor_emp_id; ?>">
                            <label for="employee_name">Name<span class="required">*</span></label>
                            <input type="text" id="employee_name" name="employee_name" autocomplete="off" value="<?php echo $donor_name; ?>" readonly>
                        </div>

                        <div class="form-control">
                            <label for="outlet">Outlet<span class="required">*</span></label>
                            <input type="text" id="outlet" name="outlet" autocomplete="off" value="<?php echo $donor_outlet; ?>" readonly>
                        </div>

                        <div class="form-control">
                            <label for="designation">Designation<span class="required">*</span></label>
                            <input type="text" id="designation" name="designation" autocomplete="off"
                                value="<?php echo $donor_designation; ?>" readonly>
                        </div>

                        <div class="form-control">
                            <label for="blood_group">Blood Group<span class="required">*</span></label>
                            <input type="text" id="blood_group" name="blood_group" autocomplete="off"
                                value="<?php echo $donor_blood_group; ?>" readonly>
                        </div>

                        <div class="form-control">
                            <label for="donation_date">Donation Date<span class="required">*</span></label>
                            <input type="date" id="donation_date" name="donation_date" autocomplete="off" required>
                        </div>

                        <div class="form-control">
                            <label for="reporting_manager">Reporting Manager<span class="required">*</span></label>
                            <input type="text" id="reporting_manager" name="reporting_manager" autocomplete="off" required>
                        </div>

                        <div class="form-control">
                            <label for="photo">Photo<span class="required">*</span></label>
                            <input type="file" id="photo" name="photo" accept="image/*" required>
                        </div>

                        <div class="form-control">
                            <label for="certificate">Certificate<span class="required">*</span></label>
                            <input type="file" id="certificate" name="certificate" accept="image/*" required>
                        </div>

                        <div class="form-btn">
                            <button type="submit" name="add-donation" class="success-btn">Submit</button>
                            <button type="button" onclick="window.location.href='add-requirement.php'"
                                class="danger-btn">Cancel</button>
                        </div>


                    </form>


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


                }
                ?>
        </div>

    </div>

</main>
<!-- main end -->

<?php
include 'footer.php';
?>