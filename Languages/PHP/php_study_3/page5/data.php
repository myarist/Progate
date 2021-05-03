<?php
require_once('drink.php');
require_once('food.php');

$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');

// Gunakan method setter untuk $juice untuk menetapkan string 'dingin' ke property $type
$juice->setType('dingin');
// Gunakan method setter untuk $coffee untuk menetapkan string 'panas' ke property $type
$coffee->setType('panas');

$menus = array($juice, $coffee);

?>