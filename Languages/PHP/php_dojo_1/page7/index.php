<?php
$prices = array(10, 6, 7, 8);
echo 'Nilai $prices: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah

$hargaTotal = 0;
$hargaTermahal = 0;

foreach ($prices as $price) {
  $hargaTotal += $price;

  if ($price > $hargaTermahal) {
    $hargaTermahal = $price;
  }
}

echo 'Harga total adalah $'.$hargaTotal;
echo '<br>';
echo 'Harga termahal adalah $'.$hargaTermahal;
?>