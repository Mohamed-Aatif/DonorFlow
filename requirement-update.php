<?php
require 'update-header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch details for the selected ID
    $query = "SELECT * FROM `request` WHERE `request_id` = ?";
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
                <li><a href="add-requirement.php">Request</a></li>
                <li class="separator">/</li>
                <li><a href="requirement-update.php?id=<?php echo $_GET['id']; ?>">Request Update</a></li>
            </ul>
        </div>

        <div class="container">

            <div class="header">
                <span>Update Request</span>
            </div>

            <div class="body">

                <form action="add-requirement.php" method="post">
                    <?php
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        ?>
                        <input type="text" id="requestid" name="requestid" value="<?php echo $row['request_id']; ?>" hidden>

                        <div class="form-control">
                            <label>Requested ID<span class="required">*</span></label>
                            <input type="number" min="1" autocomplete="off" value="<?php echo $row['requested_id']; ?>"
                                disabled>
                        </div>

                        <div class="form-control">
                            <label for="requested_date">Requested Date<span class="required">*</span></label>
                            <input type="date" id="requested_date" name="requested_date" min="1" autocomplete="off"
                                value="<?php echo $row['request_date']; ?>">
                        </div>

                        <div class="form-control">
                            <label for="source">Source<span class="required">*</span></label>
                            <input type="text" id="source" name="source" list="source-list" autocomplete="off"
                                value="<?php echo $row['request_source']; ?>">
                            <datalist id="source-list">
                                <?php
                                $sql_fetch1 = "SELECT source,source_status FROM `source` WHERE source_status = 1 ORDER BY source ASC";
                                $result1 = mysqli_query($conn, $sql_fetch1);

                                if ($result1->num_rows > 0) {
                                    while ($row1 = $result1->fetch_assoc()) {
                                        echo "<option value='" . $row1['source'] . "'>";
                                    }
                                }
                                ?>
                            </datalist>
                        </div>

                        <div class="form-control">
                            <label for="contact_no">Contact No</label>
                            <input type="number" id="contact_no" name="contact_no" min="1" autocomplete="off"
                                value="<?php echo $row['request_contact']; ?>">
                        </div>

                        <div class="form-control">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" autocomplete="off"
                                value="<?php echo $row['request_name']; ?>">
                        </div>

                        <div class="form-control">
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="blood_group" required>
                                <?php

                                $ap = "";
                                $as = "";
                                $bp = "";
                                $bs = "";
                                $abp = "";
                                $abs = "";
                                $op = "";
                                $os = "";
                                $al = "";


                                if ($row['request_blood_group'] == "A+") {
                                    $ap = "selected";
                                } elseif ($row['request_blood_group'] == "A-") {
                                    $as = "selected";
                                } elseif ($row['request_blood_group'] == "B+") {
                                    $bp = "selected";
                                } elseif ($row['request_blood_group'] == "B-") {
                                    $bs = "selected";
                                } elseif ($row['request_blood_group'] == "AB+") {
                                    $abp = "selected";
                                } elseif ($row['request_blood_group'] == "AB-") {
                                    $abs = "selected";
                                } elseif ($row['request_blood_group'] == "O+") {
                                    $op = "selected";
                                } elseif ($row['request_blood_group'] == "O-") {
                                    $os = "selected";
                                } elseif ($row['request_blood_group'] == "ALL") {
                                    $al = "selected";
                                } else {
                                    $ap = "";
                                    $as = "";
                                    $bp = "";
                                    $bs = "";
                                    $abp = "";
                                    $abs = "";
                                    $op = "";
                                    $os = "";
                                    $al = "";
                                }


                                ?>

                                <option selected disabled>Select blood group</option>
                                <option value="A+" <?php echo $ap; ?>>A+</option>
                                <option value="A-" <?php echo $as; ?>>A-</option>
                                <option value="B+" <?php echo $bp; ?>>B+</option>
                                <option value="B-" <?php echo $bs; ?>>B-</option>
                                <option value="AB+" <?php echo $abp; ?>>AB+</option>
                                <option value="AB-" <?php echo $abs; ?>>AB-</option>
                                <option value="O+" <?php echo $op; ?>>O+</option>
                                <option value="O-" <?php echo $os; ?>>O-</option>
                                <option value="ALL" <?php echo $al; ?>>ALL</option>
                            </select>
                        </div>

                        <div class="form-control">
                            <label for="no_of_donors">No of Donors</label>
                            <input type="number" id="no_of_donors" name="no_of_donors" min="0" autocomplete="off"
                                value="<?php echo $row['request_no_of_donoes']; ?>">
                        </div>

                        <div class="form-control">
                            <label for="hospital_name">Hospital Name</label>
                            <input type="text" id="hospital_name" name="hospital_name" autocomplete="off"
                                value="<?php echo $row['request_hospital']; ?>">
                        </div>

                        <div class="form-control">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" autocomplete="off"
                                value="<?php echo $row['request_location']; ?>">
                        </div>

                        <div class="form-btn">
                            <button type="submit" name="request-update" class="success-btn">Update</button>
                            <button type="button" onclick="window.location.href='add-requirement.php'"
                                class="danger-btn">Cancel</button>
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
<!-- main end -->

<?php
include 'footer.php';
?>