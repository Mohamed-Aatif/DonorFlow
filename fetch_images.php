<?php
include 'db.conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donation_id = $_POST["donation_id"];

    // Fetch images based on donation_id
    $sql = "SELECT `donation_photo`, `donation_certificate` FROM `donation_record` WHERE `donation_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $donation_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Return images as JSON
        echo json_encode([
            "donor_photo" => $row["donor_photo"],
            "donor_certificate" => $row["donor_certificate"],
        ]);
    } else {
        echo json_encode([
            "donor_photo" => "",
            "donor_certificate" => "",
        ]);
    }

}
?>
