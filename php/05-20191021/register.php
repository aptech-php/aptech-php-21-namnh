<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="./store.php" method="POST">
    <div>
      <label for="">Email: </label>
      <input type="email" name="email"></div>
    <div>
      <label for="">Password: </label>
      <input type="password" name="password">
    </div>
    <div>
      <select name="role" id="">
        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "ap_21_5";

        // Create connection
        $conn = mysqli_connect($serverName, $userName, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM ap_21_5.roles";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) { ?>

        <option value="<?php echo $row['id']; ?>">
          <?php echo $row['name']; ?>
        </option>

        <?php }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
        ?>
      </select>
    </div>
    <button type="submit">Dang Ky</button>
  </form>
</body>

</html>