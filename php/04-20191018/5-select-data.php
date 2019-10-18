<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "ap_21_4";

// Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ap_21_4.users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row["email"] == "nam@gmail.com") {
      echo "Dang Nhap Thanh Cong";
    } else {
      echo "<h1>Chuc mung 20/10</h1>";
    }
  }
} else {
  echo "0 results";
}

mysqli_close($conn);