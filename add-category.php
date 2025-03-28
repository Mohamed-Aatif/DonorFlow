<?php
include 'header.php';
?>

<!-- main start -->
<main>

    <div class="container">

        <div class="header">
            <span>Add New Category</span>

        </div>

        <div class="body">

            <form action="/submit_inventory" method="POST">

                <div class="form-control">
                    <label for="category-id">Category ID<span class="required">*</span></label>
                    <input type="text" id="category-id" name="category-id">
                </div>

                <div class="form-control">
                    <label for="category">Category Name<span class="required">*</span></label>
                    <input type="text" id="category" name="category">
                </div>

                <div class="form-control">
                    <label for="category_type">Category Type<span class="required">*</span></label>
                    <select name="category_type" id="category_type" required>
                        <option selected disabled>Select category type</option>
                        <option value="main">Add category as main</option>
                        <option value="addon">Add category as addon</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="brand">Select Brand<span class="required">*</span></label>
                    <select id="brand" name="brand">
                        <option selected disabled>Select a brand</option>
                        <option value="brand1">Brand 1</option>
                        <option value="brand2">Brand 2</option>
                        <option value="brand3">Brand 3</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="barcode">Status<span class="required">*</span></label>
                    <div class="choice-group">
                        <input type="radio" class="styled-checkbox" name="status-option" id="Active">
                        <label for="Active">Active</label>
                        <input type="radio" class="styled-checkbox" name="status-option" id="Inactive">
                        <label for="Inactive">Inactive</label>
                    </div>
                </div>


                <div class="form-btn">
                    <button class="success-btn">Submit</button>
                    <button class="danger-btn">Reset</button>
                </div>
            </form>

        </div>

    </div>

</main>

<!-- main end -->

<?php
include 'footer.php';
?>