<?php
$price = 10;
$taxRate = 0.08;
echo 'Nilai $price: '.$price;
echo '<br>';
echo 'Nilai $taxRate: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$taxIncludedPrice = $price + $price * $taxRate;
echo "Harga setelah pajak adalah $".$taxIncludedPrice

?>