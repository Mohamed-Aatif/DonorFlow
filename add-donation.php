<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Add New Donation</span>
        </div>

        <div class="body">
            <form action="" method="post">

                <div class="form-control">
                    <label for="donation_date">Donation Date<span class="required">*</span></label>
                    <input type="date" id="donation_date" name="donation_date" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="emp_id">Emp ID<span class="required">*</span></label>
                    <input type="number" id="emp_id" name="emp_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="designation">Designation</label>
                    <input type="text" id="designation" name="designation" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="blood_group">Blood Group</label>
                    <input type="text" id="blood_group" name="blood_group" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet">Outlet</label>
                    <input type="text" id="outlet" name="outlet" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="photo">Photo<span class="required">*</span></label>
                    <input type="file" id="photo" name="photo" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="certificate">Certificate<span class="required">*</span></label>
                    <input type="file" id="certificate" name="certificate" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="source">Source</label>
                    <input type="text" id="source" name="source" autocomplete="off">
                </div>

                <hr>

                <div class="form-control">
                    <label for="hospital_name">Hospital Name<span class="required">*</span></label>
                    <input type="text" id="hospital_name" name="hospital_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="location">Location<span class="required">*</span></label>
                    <input type="text" id="location" name="location" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="contact_patient">Contact / Patient Name</label>
                    <input type="text" id="contact_patient" name="contact_patient" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="contact_no">Contact No<span class="required">*</span></label>
                    <input type="text" id="contact_no" name="contact_no" autocomplete="off">
                </div>

                <div class="form-btn">
                    <button class="success-btn" type="submit">Submit</button>
                    <button type="reset" class="danger-btn">Reset</button>
                </div>

            </form>



        </div>

    </div>

</main>

<!-- main end -->

<?php
include 'footer.php';
?>