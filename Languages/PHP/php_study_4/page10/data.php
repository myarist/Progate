<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
// Import user.php
require_once('user.php');

$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'panas');
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

// Berikan instance class User ke variable $user1
$user1 = new User('Alex', 'pria');

// Berikan instance class User ke variable $user2
$user2 = new User('Emma', 'wanita');

// Berikan $user1 dan $user2 ke array $users 
$users = array($user1, $user2);

$review1 = new Review($juice->getName(), 'Yummy');
$review2 = new Review($curry->getName(), 'Sangat sehat');
$review3 = new Review($coffee->getName(), 'Wanginya harum');
$review4 = new Review($pasta->getName(), 'Sausnya enak :)');
$review5 = new Review($juice->getName(), 'Hanya jus jeruk biasa');
$review6 = new Review($curry->getName(), 'Rasanya enak untuk harganya');
$review7 = new Review($coffee->getName(), 'Kepahitannya cukup.');
$review8 = new Review($pasta->getName(), 'Bahan yang digunakan berkualitas.');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>