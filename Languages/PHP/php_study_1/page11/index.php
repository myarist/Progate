<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Definisikan array associative dibawah
    $scores = array('Matematika' => 70, 'Bahasa' => 90, 'Sains' => 80);
    
    $scores['Sains'] += 5;
    
    echo $scores['Sains'];
  ?>

</body>
</html>
