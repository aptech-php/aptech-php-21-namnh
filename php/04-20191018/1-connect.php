<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Connect PHP</h1>
  <?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";

  $connect = mysqli_connect($serverName, $userName, $password);


  if (!$connect) {
    die('Loi KET NOI DEN DATABASE' . mysqli_connect_error());
  }

  echo  '<br>Ket noi thanh Cong';

  ?>
</body>

</html>