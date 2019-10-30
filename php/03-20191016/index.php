<?php
$products = [
  [
    "name" => "Note 9",
    "price" => 500,
    "currency" => "$"
  ],
  [
    "name" => "Note 8",
    "price" => 300,
    "currency" => "$"
  ],
  [
    "name" => "iPhone X",
    "price" => 899,
    "currency" => "$"
  ],
  [
    "name" => "iPhone 8 Plus",
    "price" => 799,
    "currency" => "$"
  ],
  [
    "name" => "iPhone XI Pro Max",
    "price" => 1999,
    "currency" => "$"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Bang Gia San Pham</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Ten San Pham</th>
        <th>Gia Tien</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $tong = 0;
      for ($i = 0; $i < count($products); $i++) {
        $tong = $tong + $products[$i]["price"];
        ?>

      <tr>
        <td>
          <?php echo $i; ?>
        </td>
        <td>
          <?php echo $products[$i]["name"]; ?>
        </td>
        <td><?php
                $giaTienHienThi = $products[$i]["price"];
                if ($products[$i]["price"] > 1000) {
                  // $giaTienHienThi = $products[$i]["price"] % 1000 . "00";
                  $giaTienHienThi = number_format($products[$i]["price"]);
                }
                echo $products[$i]["currency"] . " " . $giaTienHienThi; ?>
      </tr>

      <?php
      }
      echo $tong;
      ?>
    </tbody>
  </table>
</body>

</html>