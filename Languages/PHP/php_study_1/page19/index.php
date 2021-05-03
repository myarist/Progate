<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Definisikan function getCircleArea 
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }
    
    // Panggil function getCircleArea dan tetapkan nilai return ke variable $circleArea
    $circleArea = getCircleArea(5);
    
    // Cetak variable $circleArea
    echo $circleArea;
    
  ?>

</body>
</html>
