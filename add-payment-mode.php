<?php
include 'header.php';
?>

<!-- main start -->
<main>

    <div class="container">

        <div class="header">
            <span>Add Payment Mode</span>

        </div>

        <div class="body">

            <form action="/add-payment-mode-form.html" method="POST">
            
                <div class="form-control">
                    <label for="service_providers_id">Service Providers ID<span class="required">*</span></label>
                    <input type="text" id="service_providers_id" name="service_providers_id" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="service_providers_name">Service Providers Name<span class="required">*</span></label>
                    <input type="text" id="service_providers_name" name="service_providers_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="payment_mode_name">Payment Mode Name<span class="required">*</span></label>
                    <input type="text" id="payment_mode_name" name="payment_mode_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="payment_type">Payment Type<span class="required">*</span></label>
                    <select id="payment_type" name="payment_type">
                        <option selected disabled>Select payment type</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="transaction_fees">Transaction Fees<span class="required">*</span></label>
                    <input type="text" id="transaction_fees" name="transaction_fees" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="text" id="email" name="email" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="contact_person">Contact Person<span class="required">*</span></label>
                    <input type="text" id="contact_person" name="contact_person" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="contact_no">Contact No<span class="required">*</span></label>
                    <input type="text" id="contact_no" name="contact_no" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="status">Status<span class="required">*</span></label>
                    <div class="choice-group">
                        <input type="radio" class="styled-checkbox" name="status_option" id="active">
                        <label for="active">Active</label>
                        <input type="radio" class="styled-checkbox" name="status_option" id="inactive">
                        <label for="inactive">Inactive</label>
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