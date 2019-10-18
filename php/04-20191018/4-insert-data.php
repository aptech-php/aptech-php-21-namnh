<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "ap_21_4";

// Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ap_21_4.users (email, password)
VALUES ('nam@gmail.com','123456'),
('nu@gmail.com','123456')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();