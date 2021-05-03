<?php
require_once('drink.php');
require_once('food.php');
// Import review.php
require_once('review.php');

$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'panas');
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

// Tetapkan sebuah instance class Review ke variable $review1
$review1 = new Review($juice->getName(), 'Yummy');

// Tetapkan sebuah instance class Review ke variable $review2
$review2 = new Review($curry->getName(), 'Sangat sehat');

// Tetapkan array yang terdiri dari $review1 dan $review2 ke variable $reviews
$reviews = array($review1, $review2);

?>