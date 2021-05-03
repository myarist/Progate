<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $scores = array('Matematika' => 70, 'Bahasa' => 90, 'Sains' => 80);

    // Tulis loop foreach dibawah
    foreach ($scores as $key => $value) {
      echo $key.': '.$value.' ';
    }

  ?>

</body>
</html>
