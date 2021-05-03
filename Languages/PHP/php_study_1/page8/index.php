<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
  
    $x = 1071;
    
    // Ketik statement if-elseif-else dibawah
    if ($x % 3 == 0 && $x % 7 == 0) {
      echo 'x adalah kelipatan 3 dan kelipatan 7.';
    } elseif ($x % 3 == 0) {
      echo 'x adalah kelipatan 3 tetapi bukan kelipatan 7.';
    } elseif ($x % 7 == 0) {
      echo 'x adalah kelipatan 7 tetapi bukan kelipatan 3.';
    } else {
      echo 'x bukan kelipatan 7 atau kelipatan 3.';
    }
    
  ?>

</body>
</html>
