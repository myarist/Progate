<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Definisikan function hello
    function hello() {
      echo 'Hello, world!';
    }
    
    // Panggil function hello
    hello();
    
    echo '<br>';
    // Definisikan function printRectangleArea
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    
    // Panggil function printRectangleArea dengan (5, 10) sebagai argument
    printRectangleArea(5, 10);
    
  ?>

</body>
</html>
