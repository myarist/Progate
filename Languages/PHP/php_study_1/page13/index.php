<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Deklarasikan variable $i 
    $i = 2;
    
    // Ketik loop while dibawah
    while ($i <= 100) {
      if ($i % 2 == 0) {
        echo $i;
        echo '<br>';
      }

      $i++;
    }

  ?>

</body>
</html>
