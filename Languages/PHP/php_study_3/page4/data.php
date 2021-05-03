<?php
// Hapus baris yang meng-import menu.php

// Import file drink.php dan food.php 
require_once('drink.php');
require_once('food.php');

// Jadikan $juice sebagai instance class Drink
$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
// Jadikan $coffee sebagai instance class Drink
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
// Jadikan $curry sebagai instance class Food
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
// Jadikan $pasta sebagai instance class Food
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

?>