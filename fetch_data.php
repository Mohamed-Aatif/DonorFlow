<?php
// Database connection parameters
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

// Get Brand ID from URL
if (isset($_GET['brand_id'])) {
    $brand_id = $conn->real_escape_string($_GET['brand_id']);

    // SQL query to fetch data based on Brand ID
    $sql = "SELECT * FROM brand_directory WHERE brand_id = '$brand_id'";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch the data
        $row = $result->fetch_assoc();

        // Display data in a vertical table
        echo "<table border='1'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Brand ID</td><td>{$row['brand_id']}</td></tr>";
        echo "<tr><td>Brand Name</td><td>{$row['brand_name']}</td></tr>";
        echo "<tr><td>Brand Logo</td><td><img src='{$row['brand_logo']}' alt='Brand Logo' width='100'></td></tr>";
        echo "<tr><td>Brand Tagline</td><td>{$row['brand_tagline']}</td></tr>";
        echo "<tr><td>Brand Industry</td><td>{$row['brand_industry']}</td></tr>";
        echo "<tr><td>Brand Description</td><td>{$row['brand_description']}</td></tr>";
        echo "<tr><td>Registration Number</td><td>{$row['brand_registration_no']}</td></tr>";
        echo "<tr><td>Licenses and Permits</td><td>{$row['brand_licenses_and_permits']}</td></tr>";
        echo "<tr><td>Tax Identification Number</td><td>{$row['brand_tax_identification_no']}</td></tr>";
        echo "<tr><td>Compliance Certificates</td><td>{$row['brand_compliance_certificates']}</td></tr>";
        echo "<tr><td>Incorporation Date</td><td>{$row['brand_incorporation_date']}</td></tr>";
        echo "<tr><td>Contact Person</td><td>{$row['brand_contact_person']}</td></tr>";
        echo "<tr><td>Contact Email</td><td>{$row['brand_email']}</td></tr>";
        echo "<tr><td>Phone Number</td><td>{$row['brand_phone']}</td></tr>";
        echo "<tr><td>Address</td><td>{$row['brand_address']}</td></tr>";
        echo "<tr><td>City</td><td>{$row['brand_city']}</td></tr>";
        echo "<tr><td>State</td><td>{$row['brand_state']}</td></tr>";
        echo "<tr><td>Country</td><td>{$row['brand_country']}</td></tr>";
        echo "<tr><td>Pincode</td><td>{$row['brand_pincode']}</td></tr>";
        echo "<tr><td>Region</td><td>{$row['brand_region']}</td></tr>";
        echo "<tr><td>Website URL</td><td>{$row['brand_website_url']}</td></tr>";
        echo "<tr><td>Status</td><td>{$row['brand_status']}</td></tr>";
        echo "<tr><td>Timestamp</td><td>{$row['timestamp']}</td></tr>";
        echo "</table>";
    } else {
        echo "No results found for Brand ID: $brand_id";
    }
} else {
    echo "No Brand ID provided.";
}

// Close the connection
$conn->close();
?>
