<?php
$serverName = "localhost";
$userName = "root";
$password = "";

$connect = mysqli_connect($serverName, $userName, $password);


if (!$connect) {
  die('Loi KET NOI DEN DATABASE' . mysqli_connect_error());
}

echo  '<br>Ket noi thanh Cong';

$sql = "CREATE DATABASE ap_21_4";

if (mysqli_query($connect, $sql)) {
  echo "Tao Database Thanh Cong";
} else {
  echo "Tao Database That Bai" . mysqli_error($connect);
}