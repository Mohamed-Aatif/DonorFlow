<?php

include 'db.conn.php';

// Retrieve posted data
$data = json_decode(file_get_contents('php://input'), true);
$pin = $data['pin'];

// Define the correct PIN (fetch it from a secure database in real apps)
$correctPin = '1234'; // Example PIN

if ($pin === $correctPin) {
    // PIN is valid
    echo json_encode(['success' => true]);
} else {
    // PIN is invalid
    echo json_encode(['success' => false]);
}
?>

