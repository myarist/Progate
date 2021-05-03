<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Tulis loop for dibawah
    for ($i = 1; $i <= 1000; $i++) {
      if ($i % 3 == 0) {
        continue;
      }

      echo $i;
      echo '<br>';
    }
    
  ?>

</body>
</html>
