<?php

include 'header.php';

?>

<!-- main start -->

<main>

    <div class="container">
        <div class="header">
            <span>Add New Product</span>
        </div>

        <div class="body">

            <form action="" method="post">

                <div class="form-control">
                    <label for="product_name">Product Name<span class="required">*</span></label>
                    <input type="text" id="product_name" name="product_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="product_description">Product Description<span class="required">*</span></label>
                    <input type="text" id="product_description" name="product_description" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="variant">Variant<span class="required">*</span></label>
                    <select multiple id="variant" name="variant">
                        <option value="">Qtr</option>
                        <option value="">Half</option>
                        <option value="">Full</option>
                        <option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                        <option value="">Family Size</option>
                        <option value="">Single Serving</option>
                        <option value="">Double</option>
                        <option value="">Mini</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="brand">Select Brand<span class="required">*</span></label>
                    <select id="brand" name="brand">
                        <option selected disabled>-- Select brand --</option>
                        <option value="India">India</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="category">Select Category<span class="required">*</span></label>
                    <select id="category" name="category" disabled required>
                        <option selected disabled>Select category</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="price">Price<span class="required">*</span></label>
                    <input type="text" id="price" name="price" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="sku">SKU<span class="required">*</span></label>
                    <input type="text" id="sku" name="sku" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="barcode">Barcode<span class="required">*</span></label>
                    <input type="text" id="barcode" name="barcode" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="quantity">Quantity<span class="required">*</span></label>
                    <input type="text" id="quantity" name="quantity" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="weight">Weight<span class="required">*</span></label>
                    <input type="text" id="weight" name="weight" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="dimensions">Dimensions<span class="required">*</span></label>
                    <input type="text" id="dimensions" name="dimensions" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="images">Images<span class="required">*</span></label>
                    <input type="text" id="images" name="images" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="manufacturer">Manufacturer<span class="required">*</span></label>
                    <input type="text" id="manufacturer" name="manufacturer" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="tags">Tags/Keywords<span class="required">*</span></label>
                    <input type="text" id="tags" name="tags" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="product_variants">Product Variants<span class="required">*</span></label>
                    <input type="text" id="product_variants" name="product_variants" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="supplier_information">Supplier Information<span class="required">*</span></label>
                    <input type="text" id="supplier_information" name="supplier_information" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="shipping_details">Shipping Details<span class="required">*</span></label>
                    <input type="text" id="shipping_details" name="shipping_details" autocomplete="off">
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