<?php
// Database credentials
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // or the password you set for MySQL
$dbname = "sonila_project"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$reservation_datetime = $_POST['reservation_datetime'];
$people_count = $_POST['people_count'];
$special_request = $_POST['special_request'];

// Insert reservation into database
$sql = "INSERT INTO reservations (customer_name, email, reservation_datetime, people_count, special_request)
        VALUES ('$customer_name', '$email', '$reservation_datetime', $people_count, '$special_request')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successfully made!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
