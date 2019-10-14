<h1>Hello PHP 21</h1>
<?php
// echo  6 + "5";
$a = "<p>namcoi.com</p>";
// echo $a;
?>
<!-- <h2>Hello There</h2> -->
<?php
// echo $a;
// echo $a;
// echo $a;
// echo $a;
// echo $a;
function tinhTong($x, $y)
{
  echo $x + $y;
}

// tinhTong(8, 6);
function soSanhTuoi($number)
{
  if ($number >= 18) {
    echo "Du tuoi de xem web nay !!!";
  } else {
    echo "Chua du tuoi de xem web nay";
  }
}
// soSanhTuoi(18);

$mangKetHop = ["name" => 'Nam', "age" => 18];
// echo $mangKetHop["name"];
?>
<h1>Toi la <?php echo $mangKetHop["name"]; ?></h1>
<h2>Toi <?php echo $mangKetHop["age"]; ?> tuoi</h2>

<?php
$products = [
  [
    "name" => "Sam Sung Note 10 PLUS",
    "price" => 1500,
    "currency" => "$"
  ],
  [
    ""
  ],
  [],
  [],
  [],
  []
];