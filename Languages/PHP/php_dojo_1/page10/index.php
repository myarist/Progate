<?php
$menus = array(
  array('name' => 'GULAI', 'price' => 9),
  array('name' => 'PASTA', 'price' => 12),
  array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah

$hargaTotal = 0;

foreach ($menus as $menu) {
  $price = $menu['price'];
  echo $menu['name'].' berharga $'.$price;
  echo '<br>';
  $hargaTotal += $price;
}

echo 'Harga total adalah $'.$hargaTotal;

?>