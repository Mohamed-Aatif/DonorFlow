<?php
require 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';

?>

<!-- main start -->

<main>

    <div class="breadcrumb-container">
        <ul class="breadcrumbs">
            <li><a href="dashboard.php">Home</a></li>
            <li class="separator">/</li> <!-- › -->
            <li><a href="add-requirement.php">Request</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="header">
            <span>Add New Request</span>
        </div>

        <div class="body">
            <form action="" method="post">

                <div class="form-control">
                    <label for="requested_date">Requested Date<span class="required">*</span></label>
                    <input type="date" id="requested_date" name="requested_date" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="source">Source<span class="required">*</span></label>
                    <input type="text" id="source" name="source" list="source-list" autocomplete="off">
                    <datalist id="source-list">
                        <?php
                        $sql_fetch = "SELECT source,source_status FROM `source` WHERE source_status = 1 ORDER BY source ASC";
                        $result = mysqli_query($conn, $sql_fetch);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['source'] . "'>";
                            }
                        }
                        ?>
                    </datalist>
                </div>

                <div class="form-control">
                    <label for="contact_no">Contact No</label>
                    <input type="number" id="contact_no" name="contact_no" min="1" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="blood_group">Blood Group</label>
                    <select name="blood_group" id="blood_group" required>
                        <option selected disabled>Select blood group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="no_of_donors">No of Donors</label>
                    <input type="number" id="no_of_donors" name="no_of_donors" min="0" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="hospital_name">Hospital Name</label>
                    <input type="text" id="hospital_name" name="hospital_name" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" autocomplete="off">
                </div>

                <div class="form-btn">
                    <button type="submit" name="request-submit" class="success-btn">Submit</button>
                    <button type="reset" class="danger-btn">Reset</button>
                </div>

            </form>

        </div>

    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="header">
            <span>Request List</span>
            <div class="header-filter">
            </div>
        </div>

        <div class="body">

            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requested Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Source</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blood Group</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No of Doners</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hospital Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200" id="tableBody">

                    <?php
                    $sql = "SELECT * FROM `request` ORDER BY `request_date` DESC LIMIT 5"; // Query to fetch data
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Check if data exists
                    
                        $serial_no = 1; // Initialize serial number
                    
                        while ($row = $result->fetch_assoc()) { // Fetch rows and display in table
                            
                        $requested_id = $row['requested_id'];
                        
                        // This query is used to count no of donation 
                        $donor_count = "SELECT `donation_request_id` FROM `donation_record` WHERE `donation_request_id` = $requested_id"; // Query to fetch data
                        $res = mysqli_query($conn, $donor_count);
                            ?>

                            <tr class='hover:bg-gray-50 cursor-pointer' id="<?php echo $row['request_id']; ?>">
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $serial_no; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['requested_id']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_date']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_source']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_contact']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_name']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_blood_group']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_no_of_donoes']; ?> - <?php echo $res->num_rows; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'><?php echo $row['request_hospital']; ?></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500 details-data'><p class='details-data'><?php echo $row['request_location']; ?></p></td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-blue-600'>
                                    <div class="menu-container">
                                        <button class="menu-btn" onclick="toggleDropdown(this)"><span class='material-symbols-outlined'>more_horiz</span></button>
                                        <ul class="dropdown-menu">
                                            <li><button class='viewButton tab-btn view-btn' data-id='<?php echo $row['request_id']; ?>'>View Details</button></li>
                                            <li><button class='updateButton tab-btn edit-btn' data-id='<?php echo $row['request_id']; ?>'>Update Request</li>
                                            <li><button class='donorButton tab-btn edit-btn' data-id='<?php echo $row['request_id']; ?>'>Add Donor</li>
                                            <?php if($res->num_rows <= 0) { ?>
                                                <li><button class='deleteButton tab-btn delete-btn' onclick='openPopup()' data-id="<?php echo $row['request_id']; ?>">Delete</button></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $serial_no++; // Increment serial number
                        }
                    } else {
                        ?>
                        <tr>
                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500' colspan='9'>No Data Found</td>
                        </tr>
                        <?php
                    }

                    mysqli_close($conn); // Close the connection (optional but recommended)
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</main>
<!-- main end -->

<!-- This div contain record delete conformation popup  -->
<div class="popup-overlay" id="popup">
    <div class="popup">
        <h2>Confirm Delete</h2>
        <p>Are you sure you want to delete this record? This action cannot be undone.</p>

        <form method="post">
            <input type="text" id="deleterequestid" name="deleterequestid" hidden>
            <button class="confirm-btn" name="delete-request">Yes, Delete</button>
            <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
        </form>
    </div>
</div>

<style>
.menu-container {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    margin-top: 5px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 100;
    list-style: none;
    padding: 0;
    width: 150px;
    border-radius: 8px;
    overflow: hidden;
}

.dropdown-menu li {
    padding: 0;
}

.dropdown-menu button {
    width: 100%;
    padding: 10px !important;
    border: none;
    background-color: #fff;
    text-align: left;
    cursor: pointer;
    font-size: 14px;
    font-family: 'Arial', sans-serif;
    transition: background-color 0.3s, color 0.3s;
    color: #333;
    transition: .5s;
}

.dropdown-menu button:hover {
    background-color: #007bff;
    color: #fff;
}

.dropdown-menu .delete-btn:hover {
    background-color: #dc3545;
}
</style>

<script>
// this script is used to redirect the page to update form 
document.querySelectorAll('.viewButton').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id'); // Get the ID from the data-id attribute
        // Redirect to update.php with the ID as a query parameter
        window.location.href = `requirement-list.php?id=${id}`;
    });
});

// this script is used to redirect the page to update form 
document.querySelectorAll('.updateButton').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id'); // Get the ID from the data-id attribute
        // Redirect to update.php with the ID as a query parameter
        window.location.href = `requirement-update.php?id=${id}`;
    });
});

// this script is used to redirect the page to add donor form 
document.querySelectorAll('.donorButton').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id'); // Get the ID from the data-id attribute
        // Redirect to update.php with the ID as a query parameter
        window.location.href = `add-donor-to.php?id=${id}`;
    });
});

// This script is used to open delete conformation popup and get row id
const popup = document.getElementById('popup');
const deleteButtons = document.querySelectorAll(".deleteButton");

// This function get row id on delete button click 
deleteButtons.forEach(button => {
    button.addEventListener("click", function () {
        // const row = this.parentElement.parentElement;
        // const rowId1 = row.id;
        const id = this.getAttribute('data-id');
        deleterequestid.value = id;
    });
});


// this sript is used to show view more list of table    
function toggleDropdown(button) {
    const dropdown = button.nextElementSibling;
    const allDropdowns = document.querySelectorAll(".dropdown-menu");

    allDropdowns.forEach((menu) => {
        if (menu !== dropdown) menu.style.display = "none";
    });

    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

window.onclick = (event) => {
    if (!event.target.closest(".menu-container")) {
        const allDropdowns = document.querySelectorAll(".dropdown-menu");
        allDropdowns.forEach((menu) => (menu.style.display = "none"));
    }
};
</script>

<?php
include 'footer.php';
?>