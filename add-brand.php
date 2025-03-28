<?php
include 'header.php';

$servername = "localhost";
$username = "root"; // replace with your database username
$password = "&(&%#($(@^A"; // replace with your database password
$dbname = "pos_system_db"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand_id = !empty($_POST['brand_id']) ? "'" . $_POST['brand_id'] . "'" : "NULL";
    $brand_name = !empty($_POST['brand-name']) ? "'" . $_POST['brand-name'] . "'" : "NULL";
    $brand_logo = !empty($_POST['brand-logo']) ? "'" . $_POST['brand-logo'] . "'" : "NULL";
    $brand_tagline = !empty($_POST['brand-tagline']) ? "'" . $_POST['brand-tagline'] . "'" : "NULL";
    $brand_industry = !empty($_POST['brand-industry']) ? "'" . $_POST['brand-industry'] . "'" : "NULL";
    $brand_description = !empty($_POST['brand-description']) ? "'" . $_POST['brand-description'] . "'" : "NULL";
    $brand_registration_no = !empty($_POST['registration-number']) ? "'" . $_POST['registration-number'] . "'" : "NULL";
    $brand_licenses_and_permits = !empty($_POST['licenses-permits']) ? "'" . $_POST['licenses-permits'] . "'" : "NULL";
    $brand_tax_identification_no = !empty($_POST['tax-identification']) ? "'" . $_POST['tax-identification'] . "'" : "NULL";
    $brand_compliance_certificates = !empty($_POST['compliance-certificates']) ? "'" . $_POST['compliance-certificates'] . "'" : "NULL";
    $brand_incorporation_date = !empty($_POST['incorporation-date']) ? "'" . $_POST['incorporation-date'] . "'" : "NULL";
    $brand_contact_person = !empty($_POST['contact-person']) ? "'" . $_POST['contact-person'] . "'" : "NULL";
    $brand_email = !empty($_POST['contact-email']) ? "'" . $_POST['contact-email'] . "'" : "NULL";
    $brand_phone = !empty($_POST['phone-no']) ? "'" . $_POST['phone-no'] . "'" : "NULL";
    $brand_address = !empty($_POST['hq-address']) ? "'" . $_POST['hq-address'] . "'" : "NULL";
    $brand_city = !empty($_POST['hq-city']) ? "'" . $_POST['hq-city'] . "'" : "NULL";
    $brand_state = !empty($_POST['hq-state']) ? "'" . $_POST['hq-state'] . "'" : "NULL";
    $brand_country = !empty($_POST['hq-country']) ? "'" . $_POST['hq-country'] . "'" : "NULL";
    $brand_pincode = !empty($_POST['hq-pincode']) ? "'" . $_POST['hq-pincode'] . "'" : "NULL";
    $brand_region = !empty($_POST['hq-regions']) ? "'" . $_POST['hq-regions'] . "'" : "NULL";
    $brand_website_url = !empty($_POST['website-url']) ? "'" . $_POST['website-url'] . "'" : "NULL";
    $brand_status = 1;
    $timestamp = "'" . date('Y-m-d H:i:s') . "'"; // Assuming timestamp is the current date and time

    echo insertBrandData($conn, $brand_id, $brand_name, $brand_logo, $brand_tagline, $brand_industry, $brand_description, $brand_registration_no, $brand_licenses_and_permits, $brand_tax_identification_no, $brand_compliance_certificates, $brand_incorporation_date, $brand_contact_person, $brand_email, $brand_phone, $brand_address, $brand_city, $brand_state, $brand_country, $brand_pincode, $brand_region, $brand_website_url, $brand_status, $timestamp);
}

function insertBrandData($conn, $brand_id, $brand_name, $brand_logo, $brand_tagline, $brand_industry, $brand_description, $brand_registration_no, $brand_licenses_and_permits, $brand_tax_identification_no, $brand_compliance_certificates, $brand_incorporation_date, $brand_contact_person, $brand_email, $brand_phone, $brand_address, $brand_city, $brand_state, $brand_country, $brand_pincode, $brand_region, $brand_website_url, $brand_status, $timestamp)
{
    $sql = "INSERT INTO `brand_directory`(`brand_id`, `brand_name`, `brand_logo`, `brand_tagline`, `brand_industry`, `brand_description`, `brand_registration_no`, `brand_licenses_and_permits`, `brand_tax_identification_no`, `brand_compliance_certificates`, `brand_incorporation_date`, `brand_contact_person`, `brand_email`, `brand_phone`, `brand_address`, `brand_city`, `brand_state`, `brand_country`, `brand_pincode`, `brand_region`, `brand_website_url`, `brand_status`, `timestamp`) 
            VALUES ($brand_id, $brand_name, $brand_logo, $brand_tagline, $brand_industry, $brand_description, $brand_registration_no, $brand_licenses_and_permits, $brand_tax_identification_no, $brand_compliance_certificates, $brand_incorporation_date, $brand_contact_person, $brand_email, $brand_phone, $brand_address, $brand_city, $brand_state, $brand_country, $brand_pincode, $brand_region, $brand_website_url, $brand_status, $timestamp)";

    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>


<!-- main start -->

<main>



    <div class="container">

        <div class="header">
            <span>New Brand</span>
        </div>

        <div class="body">
            <form action="" method="post" id="myForm">

                <details>
                    <summary>Brand Identity Information</summary>

                    <div class="form-control">
                        <label for="brand-name">Brand Name<span class="required">*</span></label>
                        <input type="text" id="brand-name" name="brand-name" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="brand-logo">Brand Logo<span class="required">*</span></label>
                        <input type="file" id="brand-logo" name="brand-logo" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="brand-tagline">Brand Tagline<span class="required">*</span></label>
                        <input type="text" id="brand-tagline" name="brand-tagline" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="brand-industry">Brand Industry<span class="required">*</span></label>
                        <select id="brand-industry" name="brand-industry">
                            <option selected disabled>Select Industry</option>
                            <option value="hotel">Hotel</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="automobile">Automobile</option>
                            <option value="ecommerce">E-commerce</option>
                            <option value="retail">Retail</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="fashion">Fashion</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="tourism">Tourism</option>
                            <option value="realestate">Real Estate</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="brand-description">Brand Description<span class="required">*</span></label>
                        <input type="text" id="brand-description" name="brand-description" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="website-url">Website URL</label>
                        <input type="url" id="website-url" name="website-url" autocomplete="off">
                    </div>

                </details>

                <details>
                    <summary>Legal and Status Information</summary>

                    <div class="form-control">
                        <label for="registration-number">Registration Number<span class="required">*</span></label>
                        <input type="text" id="registration-number" name="registration-number" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="licenses-permits">Licenses and Permits<span class="required">*</span></label>
                        <input type="text" id="licenses-permits" name="licenses-permits" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="tax-identification">Tax Identification Number<span class="required">*</span></label>
                        <select id="tax-identification" name="tax-identification">
                            <option selected disabled>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="compliance-certificates">Compliance Certificates<span
                                class="required">*</span></label>
                        <select id="compliance-certificates" name="compliance-certificates">
                            <option selected disabled>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="incorporation-date">Incorporation Date<span class="required">*</span></label>
                        <input type="date" id="incorporation-date" name="incorporation-date" autocomplete="off">
                    </div>

                </details>

                <details>
                    <summary>Contact Information</summary>

                    <div class="form-control">
                        <label for="contact-person">Contact Person<span class="required">*</span></label>
                        <input type="text" id="contact-person" name="contact-person">
                    </div>

                    <div class="form-control">
                        <label for="contact-email">Email<span class="required">*</span></label>
                        <input type="email" id="contact-email" name="contact-email">
                    </div>

                    <div class="form-control">
                        <label for="phone-no">Phone No<span class="required">*</span></label>
                        <input type="tel" id="phone-no" name="phone-no">
                    </div>

                </details>

                <details>
                    <summary>Headquarters Location</summary>

                    <div class="form-control">
                        <label for="hq-address">Address</label>
                        <input type="text" id="hq-address" name="hq-address">
                    </div>

                    <div class="form-control">
                        <label for="hq-city">City</label>
                        <input type="text" id="hq-city" name="hq-city">
                    </div>

                    <div class="form-control">
                        <label for="hq-state">State</label>
                        <input type="text" id="hq-state" name="hq-state">
                    </div>

                    <div class="form-control">
                        <label for="hq-country">Country</label>
                        <input type="text" id="hq-country" name="hq-country">
                    </div>

                    <div class="form-control">
                        <label for="hq-pincode">Pincode</label>
                        <input type="text" id="hq-pincode" name="hq-pincode">
                    </div>

                    <div class="form-control">
                        <label for="hq-regions">Regions</label>
                        <select id="hq-regions" name="hq-regions">
                            <option selected disabled>Select Regions</option>
                            <option value="east">East Regions</option>
                            <option value="north">North Regions</option>
                            <option value="south">South Regions</option>
                            <option value="west">West Regions</option>
                        </select>
                    </div>

                </details>

                <div class="form-btn">
                    <button class="success-btn">Submit</button>
                    <button type="reset" class="danger-btn">Reset</button>
                </div>

            </form>


        </div>

    </div>

    <br>

    <div class="container">
        <!-- <div class="header">
            <span>Add New Brand</span>
        </div>

        <div class="body">

            <form action="" method="post">

                <div class="form-control">
                    <label for="brand_name">Brand Name<span class="required">*</span></label>
                    <input type="text" id="brand_name" name="brand_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="branch_adrs">Brand Address<span class="required">*</span></label>
                    <input type="text" id="branch_adrs" name="branch_adrs" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="branch_code">Brand Code<span class="required">*</span></label>
                    <input type="text" id="branch_code" name="branch_code" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="contach_no">Brand Contact No<span class="required">*</span></label>
                    <input type="text" id="contach_no" name="contach_no" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="email">Brand Email<span class="required">*</span></label>
                    <input type="text" id="email" name="email" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="logo">Brand Logo<span class="required">*</span></label>
                    <input type="file" id="logo" name="logo" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="licence_no">Brand Licence<span class="required">*</span></label>
                    <input type="text" id="licence_no" name="licence_no" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="inauguration_date">Inauguration Date<span class="required">*</span></label>
                    <input type="date" id="inauguration_date" name="inauguration_date" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="website">Website URL</label>
                    <input type="text" id="website" name="website" autocomplete="off">
                </div>

                <div class="form-btn">
                    <button class="success-btn">Submit</button>
                    <button class="danger-btn">Reset</button>
                </div>

            </form>


        </div> -->
    </div>

</main>

<!-- main end -->

<?php

include 'footer.php';

?>