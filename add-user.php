<?php
include 'header.php';
?>

<!-- main start -->
<main>



    <div class="container">

        <div class="header">
            <span>New User Approval</span>
        </div>

        <div class="body">
            <form action="" method="post">

                <details>
                    <summary>Personal Info</summary>

                    <div class="form-control">
                        <label for="name">Name<span class="required">*</span></label>
                        <input type="text" id="name" name="name" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="male">Gender<span class="required">*</span></label>
                        <div class="choice-group">
                            <input type="radio" class="styled-checkbox" name="status-option" id="male" required>
                            <label for="male">Male</label>
                            <input type="radio" class="styled-checkbox" name="status-option" id="female" required>
                            <label for="female">Female</label>
                            <input type="radio" class="styled-checkbox" name="status-option" id="other" required>
                            <label for="other">Other</label>
                        </div>
                    </div>

                    <div class="form-control">
                        <label for="qualification">Qualification<span class="required">*</span></label>
                        <select id="qualification" name="qualification">
                            <option selected disabled>Select qualification</option>
                            <option value="metriculation">Metriculation</option>
                            <option value="high_school">High School</option>
                            <option value="bachelor">Bachelor's Degree</option>
                            <option value="master">Master's Degree</option>
                            <option value="phd">Ph.D.</option>
                            <option value="diploma">Diploma</option>
                            <option value="certification">Certification</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="dob">Date Of Birth<span class="required">*</span></label>
                        <input type="date" id="dob" name="dob" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="email">Email<span class="required">*</span></label>
                        <input type="email" id="email" name="email" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="contactno">Contact No<span class="required">*</span></label>
                        <input type="number" min="0" id="contactno" name="contactno" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="doorno">Door No<span class="required">*</span></label>
                        <input type="text" id="doorno" name="doorno" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="address">Address<span class="required">*</span></label>
                        <input type="text" id="address" name="address" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="city">City<span class="required">*</span></label>
                        <input type="text" id="city" name="city" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="state">State<span class="required">*</span></label>
                        <input type="text" id="state" name="state" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="pincode">PIN Code<span class="required">*</span></label>
                        <input type="text" id="pincode" name="pincode" autocomplete="off" required>
                    </div>

                    <div class="form-control">
                        <label for="profilepicture">Profile Picture<span class="required">*</span></label>
                        <input type="file" id="profilepicture" name="profilepicture">
                    </div>

                </details>

                <details>
                    <summary>Professional Info</summary>

                    <div class="form-control">
                        <label for="empid">Employee ID<span class="required">*</span></label>
                        <input type="number" id="empid" name="empid" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="designation">Designation<span class="required">*</span></label>
                        <select name="designation" id="designation">
                            <option selected disabled>Select designation</option>
                            <option value="">Admin</option>
                            <option value="">Manager</option>
                            <option value="">Floor Manager</option>
                            <option value="">Cashier</option>
                            <option value="">Writer</option>
                            <option value="">Captain</option>
                            <option value="">Steward</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="department">Department<span class="required">*</span></label>
                        <select name="department" id="department">
                            <option selected disabled>Select designation</option>
                            <option value="">Admin</option>
                            <option value="">Manager</option>
                            <option value="">Floor Manager</option>
                            <option value="">Cashier</option>
                            <option value="">Writer</option>
                            <option value="">Captain</option>
                            <option value="">Steward</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="location">User Location<span class="required">*</span></label>
                        <select name="location" id="location">
                            <option selected disabled>Select location</option>
                            <option value="">Admin</option>
                            <option value="">Manager</option>
                            <option value="">Floor Manager</option>
                            <option value="">Cashier</option>
                            <option value="">Writer</option>
                            <option value="">Captain</option>
                            <option value="">Steward</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="empstatus">Employment Status<span class="required">*</span></label>
                        <select name="empstatus" id="empstatus">
                            <option selected disabled>Select status</option>
                            <option value="">Admin</option>
                            <option value="">Manager</option>
                            <option value="">Floor Manager</option>
                            <option value="">Cashier</option>
                            <option value="">Writer</option>
                            <option value="">Captain</option>
                            <option value="">Steward</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="manager">Reporting Manager<span class="required">*</span></label>
                        <select name="manager" id="manager">
                            <option selected disabled>Select manager</option>
                            <option value="">Admin</option>
                            <option value="">Manager</option>
                            <option value="">Floor Manager</option>
                            <option value="">Cashier</option>
                            <option value="">Writer</option>
                            <option value="">Captain</option>
                            <option value="">Steward</option>
                        </select>
                    </div>

                </details>

                <details>
                    <summary>Documents</summary>

                    <div class="form-control">
                        <label for="documentype">Documen Type<span class="required">*</span></label>
                        <select name="documentype" id="documentype">
                            <option selected disabled>Select document type</option>
                            <option value="">Aadhaar card</option>
                            <option value="">PAN Card</option>
                            <option value="">Passport</option>
                            <option value="">Driver's license</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="documenidno">Documen ID No<span class="required">*</span></label>
                        <input type="text" id="documenidno" name="documenidno">
                    </div>

                    <div class="form-control">
                        <label for="documencopy">Documen Copy<span class="required">*</span></label>
                        <input type="file" id="documencopy" name="documencopy">
                    </div>

                    <div class="form-control">
                        <label for="copyofcv">Copy of CV<span class="required">*</span></label>
                        <input type="file" id="copyofcv" name="copyofcv">
                    </div>

                </details>

                <details>
                    <summary>Bank Info</summary>

                    <div class="form-control">
                        <label for="beneficiaryname">Beneficiary Name</label>
                        <input type="text" id="beneficiaryname" name="beneficiaryname">
                    </div>

                    <div class="form-control">
                        <label for="accountno">Account No</label>
                        <input type="text" id="accountno" name="accountno">
                    </div>

                    <div class="form-control">
                        <label for="ifsccode">IFSC Code</label>
                        <input type="text" id="ifsccode" name="ifsccode" oninput="getBankDetails()">
                    </div>

                    <div class="form-control">
                        <label for="bankname">Bank Name</label>
                        <input type="text" id="bankname" name="bankname" readonly>
                    </div>

                    <div class="form-control">
                        <label for="branchname">Branch Name</label>
                        <input type="text" id="branchname" name="branchname" readonly>
                    </div>

                </details>

                <details>
                    <summary>Authentication Info</summary>

                    <div class="form-control">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="Mohamed-Aatif" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" value="Qwerzxcv@123" autocomplete="off">
                    </div>

                    <div class="form-control">
                        <label for="pin">Security PIN</label>
                        <input type="text" id="pin" name="pin" value="987654" autocomplete="off">
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
<!-- 
    <div class="container">

        <div class="header">
            <span>Add User</span>
        </div>

        <div class="body">

            <form action="/add-user.html" method="POST">

                <div class="form-control">
                    <label for="profilepicture">Profile Picture<span class="required">*</span></label>
                    <input type="file" id="profilepicture" name="profilepicture">
                </div>

                <div class="form-control">
                    <label for="name">Name<span class="required">*</span></label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-control">
                    <label for="name">Gender<span class="required">*</span></label>
                    <div class="choice-group">
                        <input type="radio" class="styled-checkbox" name="status-option" id="male">
                        <label for="male">Male</label>
                        <input type="radio" class="styled-checkbox" name="status-option" id="female">
                        <label for="female">Female</label>
                        <input type="radio" class="styled-checkbox" name="status-option" id="other">
                        <label for="other">Other</label>
                    </div>
                </div>

                <div class="form-control">
                    <label for="name">Date Of Birth<span class="required">*</span></label>
                    <input type="date" id="name" name="name">
                </div>

                <div class="form-control">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="text" id="email" name="email">
                </div>

                <div class="form-control">
                    <label for="contactno">Contact No<span class="required">*</span></label>
                    <input type="text" id="contactno" name="contactno">
                </div>

                <div class="form-control">
                    <label for="address">Address<span class="required">*</span></label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="form-control">
                    <label for="address">Employee ID<span class="required">*</span></label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="form-control">
                    <label for="designation">Designation<span class="required">*</span></label>
                    <select name="designation" id="designation">
                        <option selected disabled>Select designation</option>
                        <option value="">Admin</option>
                        <option value="">Manager</option>
                        <option value="">Floor Manager</option>
                        <option value="">Cashier</option>
                        <option value="">Writer</option>
                        <option value="">Captain</option>
                        <option value="">Steward</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="designation">Department<span class="required">*</span></label>
                    <select name="designation" id="designation">
                        <option selected disabled>Select designation</option>
                        <option value="">Admin</option>
                        <option value="">Manager</option>
                        <option value="">Floor Manager</option>
                        <option value="">Cashier</option>
                        <option value="">Writer</option>
                        <option value="">Captain</option>
                        <option value="">Steward</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="designation">User Location<span class="required">*</span></label>
                    <select name="designation" id="designation">
                        <option selected disabled>Select designation</option>
                        <option value="">Admin</option>
                        <option value="">Manager</option>
                        <option value="">Floor Manager</option>
                        <option value="">Cashier</option>
                        <option value="">Writer</option>
                        <option value="">Captain</option>
                        <option value="">Steward</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="designation">Employment Status<span class="required">*</span></label>
                    <select name="designation" id="designation">
                        <option selected disabled>Select designation</option>
                        <option value="">Admin</option>
                        <option value="">Manager</option>
                        <option value="">Floor Manager</option>
                        <option value="">Cashier</option>
                        <option value="">Writer</option>
                        <option value="">Captain</option>
                        <option value="">Steward</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="documentype">Documen Type<span class="required">*</span></label>
                    <select name="documentype" id="documentype">
                        <option selected disabled>Select document type</option>
                        <option value="">Aadhaar card</option>
                        <option value="">PAN Card</option>
                        <option value="">Passport</option>
                        <option value="">Driver's license</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="documenidno">Documen ID No<span class="required">*</span></label>
                    <input type="text" id="documenidno" name="documenidno">
                </div>

                <div class="form-control">
                    <label for="documencopy">Documen Copy<span class="required">*</span></label>
                    <input type="file" id="documencopy" name="documencopy">
                </div>

                <div class="form-control">
                    <label for="beneficiaryname">Beneficiary Name<span class="required">*</span></label>
                    <input type="text" id="beneficiaryname" name="beneficiaryname">
                </div>

                <div class="form-control">
                    <label for="accountno">Account No<span class="required">*</span></label>
                    <input type="text" id="accountno" name="accountno">
                </div>

                <div class="form-control">
                    <label for="bank">Bank<span class="required">*</span></label>
                    <input type="text" id="bank" name="bank">
                </div>

                <div class="form-control">
                    <label for="ifsccode">IFSC Code<span class="required">*</span></label>
                    <input type="text" id="ifsccode" name="ifsccode">
                </div>

                <div class="form-control">
                    <label for="branch">Branch<span class="required">*</span></label>
                    <input type="text" id="branch" name="branch">
                </div>

                <div class="form-control">
                    <label for="status">Status<span class="required">*</span></label>
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

    </div> -->

</main>

<!-- main end -->


<?php
include 'footer.php';
?>