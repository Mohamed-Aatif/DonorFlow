<?php
include 'db.conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $city = $_POST['city'];
    $city_status = 1;

    // Insert query
    $sql = "INSERT INTO city (city, city_status) VALUES ('$city', '$city_status')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <div class="form-control">
            <label for="city">City<span class="required">*</span></label>
            <input type="text" id="city" name="city" required autofocus>
</br>
</br>
        </div>

        <div class="form-btn">
            <button type="submit" name="submit" class="success-btn">Submit</button>
            <button type="reset" class="danger-btn">Reset</button>
        </div>
    </form>
</body>

</html>