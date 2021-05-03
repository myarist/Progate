<?php
require_once('drink.php');
require_once('food.php');

$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'panas');
// Tambahkan argument integer 3 sebagai argument terakhir dari pemanggilan method baru untuk $curry
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
// Tambahkan argument integer 1 sebagai argument terakhir dari pemanggilan method baru untuk $pasta
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

?>