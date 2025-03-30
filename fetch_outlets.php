<?php
    include 'db.conn.php'; // Database connection
    if (isset($_POST['city_id'])) {
        $city_id = $_POST['city_id'];
        $query = "SELECT * FROM `outlet` WHERE `outlet_city` = '$city_id'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0){
        echo '<option value="" selected dispabled>Select outlet</option>';
        } else {
            echo '<option selected disabled>No outlet found</option>';
        }

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row['outlet']."'>".$row['outlet']."</option>";
        }
    }
?>
