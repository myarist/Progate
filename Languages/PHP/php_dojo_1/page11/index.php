<?php
$menus = array(
  array('name' => 'GULAI', 'price' => 9),
  array('name' => 'PASTA', 'price' => 12),
  array('name' => 'KOPI', 'price' => 6)
);

$hargaTotal = 0;
$hargaTermahal = 0; // Variable untuk harga termahal
$hargaBarangTermahal = ''; // Variable untuk menyimpan harga item termahal
foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.' berharga $'.$price;
  echo '<br>';
  $hargaTotal += $price;
  // Ketika lebih besar dari nilai yang disimpan di $hargaTermahal
  if ($price > $hargaTermahal) {
    // Perbarui $hargaTermahal dengan nilai tertinggi
    $hargaTermahal = $price;
    // Perbarui $hargaBarangTermahal dengan nama item termahal yang baru
    $hargaBarangTermahal = $name;
  }
}
echo 'Harga total adalah $'.$hargaTotal;
echo '<br>';
echo 'Harga item termahal adalah'.$hargaBarangTermahal.' dengan harga $'.$hargaTermahal;

?>