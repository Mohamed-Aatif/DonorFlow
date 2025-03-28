<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Add New Request</span>
        </div>

        <div class="body">

            <form action="" method="post">

                <div class="form-control">
                    <label for="outlet_id">Requested Date<span class="required">*</span></label>
                    <input type="date" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Source<span class="required">*</span></label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Contact No</label>
                    <input type="number" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Name</label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Blood Group</label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">No of Doners</label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Hospital Name</label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="outlet_id">Location</label>
                    <input type="text" id="outlet_id" name="outlet_id" min="1" autocomplete="off">
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