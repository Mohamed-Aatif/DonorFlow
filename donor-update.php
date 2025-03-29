<?php
include 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $employeeid = $_POST['employeeid'];
//     $donorname = $_POST['donorname'];
//     $contactno = $_POST['contactno'];
//     $bloodgroup = $_POST['bloodgroup'];
//     $gender = $_POST['gender'];
//     $dob = $_POST['dob'];
//     $designation = $_POST['designation'];
//     $city = $_POST['city'];
//     $outlet = $_POST['outlet'];

//     // Perform your update operations here, like inserting data into the database
//     echo "Data received successfully!";
// }

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch details for the selected ID
    $query = "SELECT * FROM `donor` WHERE `donor_id` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    ?>

    <!-- main start -->

    <main>

        <div class="breadcrumb-container">
            <ul class="breadcrumbs">
                <li><a href="dashboard.php">Home</a></li>
                <li class="separator">/</li>
                <li><a href="add-donor.php">Donor</a></li>
                <li class="separator">/</li>
                <li><a href="#">Donor Update</a></li>
            </ul>
        </div>

        <div class="container">

            <div class="header">
                <span>Add New Donor</span>
            </div>

            <div class="body">
                <div class="header">
                    <span>Update City</span>
                </div>
                <div class="body">

                    <?php
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        ?>

                        <form id="editForm" method="post">
                            <input type="text" id="cityid" name="cityid" hidden>
                            <div class="form-control">
                                <label for="employeeid">Employee ID</label>
                                <input type="text" id="employeeid" name="employeeid" autocomplete="off" value="<?php echo $row['donor_emp_id']; ?>" disabled>
                            </div>
                            <div class="form-control">
                                <label for="donorname">Donor Name</label>
                                <input type="text" id="donorname" name="donorname" autocomplete="off" value="<?php echo $row['donor_name']; ?>" disabled>
                            </div>
                            <div class="form-control">
                                <label for="contactno">Contact No</label>
                                <input type="text" id="contactno" name="contactno" autocomplete="off" value="<?php echo $row['donor_contact']; ?>" required>
                            </div>
                            <div class="form-control">
                                <label for="bloodgroup">Blood Group</label>
                                <input type="text" id="bloodgroup" name="bloodgroup" autocomplete="off" value="<?php echo $row['donor_blood_group']; ?>" disabled>
                            </div>
                            <div class="form-control">
                                <label for="gender">Gender</label>
                                <input type="text" id="gender" name="gender" autocomplete="off" value="<?php echo $row['donor_gender']; ?>" disabled>
                            </div>
                            <div class="form-control">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob" autocomplete="off" value="<?php echo $row['donor_dob']; ?>" disabled>
                            </div>
                            <div class="form-control">
                                <label for="designation">Designation</label>
                                <select name="designation" id="designation">
                                    <option selected disabled>Select designation</option>
                                    <?php

                                    $sql_fetch = "SELECT designation,designation_status FROM `designation` WHERE designation_status = 1 ORDER BY designation ASC";
                                    $result = mysqli_query($conn, $sql_fetch);

                                    if ($result->num_rows > 0) {
                                        while ($row1 = $result->fetch_assoc()) {

                                            if ($row1['designation'] == $row['donor_designation']) {
                                                $designationcheck = "selected";
                                            } else {
                                                $designationcheck = '';
                                            }

                                            echo "<option value='" . $row1['designation'] . "' $designationcheck>" . $row1['designation'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-control">
                                <label for="city">City</label>
                                <select id="city" name="city" required>
                                    <option selected disabled>Select city</option>
                                    <?php

                                    $sql_fetch = "SELECT city,city_status FROM `city` WHERE city_status = 1 ORDER BY city ASC";
                                    $result = mysqli_query($conn, $sql_fetch);

                                    if ($result->num_rows > 0) {
                                        while ($row1 = $result->fetch_assoc()) {

                                            if ($row1['city'] == $row['donor_city']) {
                                                $citycheck = "selected";
                                            } else {
                                                $citycheck = '';
                                            }

                                            echo "<option value='" . $row1['city'] . "' $citycheck>" . $row1['city'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-control">
                                <label for="outlet">Outlet</label>
                                <select name="designation" id="designation">
                                    <option selected disabled>Select outlet</option>
                                    <?php

                                    $sql_fetch = "SELECT outlet,outlet_status FROM `outlet` WHERE outlet_status = 1 ORDER BY outlet ASC";
                                    $result = mysqli_query($conn, $sql_fetch);

                                    if ($result->num_rows > 0) {
                                        while ($row1 = $result->fetch_assoc()) {

                                            if ($row1['outlet'] == $row['donor_outlet']) {
                                                $outletcheck = "selected";
                                            } else {
                                                $outletcheck = '';
                                            }

                                            echo "<option value='" . $row1['outlet'] . "' $outletcheck>" . $row1['outlet'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="update" class="success-btn">Submit</button>
                                <button type="button" onclick="closeEditPopup()" class="danger-btn"
                                    id="closeButton">Close</button>
                            </div>
                        </form>
                        <?php

                    } else {
                        echo "No record found for the given ID.";
                    }

                    $stmt->close();
}
$conn->close();
?>
            </div>
        </div>
    </div>

</main>