<?php
include 'update-header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';

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
                <li><a href="donor-update.php?id=<?php echo $_GET['id']; ?>">Donor Update</a></li>
            </ul>
        </div>

        <div class="container">

            <div class="header">
                <span>Update Donor</span>
            </div>

            <div class="body">

                <?php
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    ?>

                    <form action="add-donor.php" method="post">
                        <input type="text" id="donorid" name="donorid" value="<?php echo $row['donor_id']; ?>" hidden>
                        <div class="form-control">
                            <label for="employeeid">Employee ID</label>
                            <input type="text" id="employeeid" name="employeeid" autocomplete="off"
                                value="<?php echo $row['donor_emp_id']; ?>" disabled>
                        </div>
                        <div class="form-control">
                            <label for="donorname">Donor Name</label>
                            <input type="text" id="donorname" name="donorname" autocomplete="off"
                                value="<?php echo $row['donor_name']; ?>" disabled>
                        </div>
                        <div class="form-control">
                            <label for="contactno">Contact No</label>
                            <input type="number" maxlength="10" id="contactno" name="contactno" autocomplete="off"
                                value="<?php echo $row['donor_contact']; ?>" required>
                        </div>
                        <div class="form-control">
                            <label for="bloodgroup">Blood Group</label>
                            <input type="text" id="bloodgroup" name="bloodgroup" autocomplete="off"
                                value="<?php echo $row['donor_blood_group']; ?>" disabled>
                        </div>
                        <div class="form-control">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" autocomplete="off"
                                value="<?php echo $row['donor_gender']; ?>" disabled>
                        </div>
                        <div class="form-control">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" autocomplete="off" value="<?php echo $row['donor_dob']; ?>"
                                disabled>
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
                            <select name="outlet" id="outlet">
                                <option selected disabled>Select outlet</option>
                                <?php
                                $donor_city = $row['donor_city'];

                                $sql_fetch = "SELECT outlet,outlet_status FROM `outlet` WHERE `outlet_city` = '$donor_city' && outlet_status = 1 ORDER BY outlet ASC";
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
                            <button type="submit" name="donor-update" class="success-btn">Update</button>
                            <button type="button" onclick="window.location.href='add-donor.php'" class="danger-btn" id="closeButton">Cancel</button>
                        </div>
                    </form>
                    <?php

                } else {
                    echo "No record found for the given ID.";
                }

}
?>
        </div>
    </div>

</main>

<script>

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