<?php
// Database credentials
$host = 'localhost';  // Typically "localhost"
$username = 'root';  // Your MySQL username
$password = '';  // Your MySQL password
$database = 'donorpulse';  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";




?>