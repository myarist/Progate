<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Berikan sebuah angka ke $num
    $num = 50;
    // Berikan sisa $num dibagi dengan 3
    $remainder = $num % 3;
    
    switch ($remainder) {
      case 0:
        echo 'Sangat beruntung!!';
        break;
        
      case 1:
        echo 'Beruntung!';
        break;
      
      case 2:
        echo 'Sedikit beruntung.';
        break;
        
      default:
        echo 'Tidak beruntung...';
        break;
    }
  ?>

</body>
</html>
