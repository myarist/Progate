<?php
require_once('drink.php');
require_once('food.php');

// Tambahkan argument 'dingin' ke method pemanggil baru untuk $juice
$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'dingin');
// Tambahkan argument 'panas' ke method pemanggil baru untuk  $coffee
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'panas');
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// Hapus dua baris dibawah


$menus = array($juice, $coffee, $curry, $pasta);

?>