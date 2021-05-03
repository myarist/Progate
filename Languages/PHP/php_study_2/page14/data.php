<?php
require_once('menu.php');

$juice = new Menu('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// Tetapkan property orderCount $juice ke 2 menggunakan method setOrderCount
$juice->setOrderCount(2);

$menus = array($juice, $coffee, $curry, $pasta);

?>