<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    
    $str = 'progate';
    
    // Cetak panjang $str menggunakan strlen
    echo strlen($str);
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');
    
    // Cetak jumlah element di $array menggunakan count
    echo count($array);
    echo '<br>';
    
    // Cetak angka acak antara 10 dan 15 menggunakan rand
    echo rand(10, 15);
    
  ?>

</body>
</html>
