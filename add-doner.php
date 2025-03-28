<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Add New Doner</span>
        </div>

        <div class="body">

            <form action="" method="post">

                <div class="form-control">
                    <label for="outlet_id">Emp ID<span class="required">*</span></label>
                    <input type="number" id="outlet_id" name="outlet_id" min="1" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="outlet_id">Doner Name<span class="required">*</span></label>
                    <input type="number" id="outlet_id" name="outlet_id" min="1" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="outlet_id">Contact No<span class="required">*</span></label>
                    <input type="number" id="outlet_id" name="outlet_id" min="1" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="brand">Designation<span class="required">*</span></label>
                    <select name="brand" id="brand" required>
                        <option selected disabled>-- Select designation --</option>
                        <option value="Branch Manager">Branch Manager</option>
                        <option value="Assistant Branch Manager">Assistant Branch Manager</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Writer">Writer</option>
                        <option value="Cashier">Cashier</option>
                        <option value="Caption">Caption</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="Gender">Gender<span class="required">*</span></label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" id="Male">Male</label>
                        <label><input type="radio" name="gender" id="Female">Female</label>
                    </div>
                </div>

                <div class="form-control">
                    <label for="outlet_id">Date of Birth<span class="required">*</span></label>
                    <input type="date" id="outlet_id" name="outlet_id" min="1" autocomplete="off" required>
                </div>

                <div class="form-control">
                    <label for="city1">Select City<span class="required">*</span></label>
                    <select id="city1" name="city">
                        <option selected disabled>Select City</option>
                        <option value="">Bangalore</option>
                        <option value="">Mysore</option>
                        <option value="">Chennai</option>
                        <option value="">Hyderabad</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="city">Select Outlet<span class="required">*</span></label>
                    <select id="city1" name="city">
                        <option selected disabled>Select outlet</option>
                        <option value="">ALK</option>
                        <option value="">ARK</option>
                        <option value="">BFD</option>
                        <option value="">CST</option>
                    </select>
                </div>

                <div class="form-btn">
                    <button class="success-btn">Submit</button>
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