<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // Ketik loop for dibawah
    for ($i = 1; $i <= 1000; $i++) {
      if ($i > 500) {
        break;
      }

      echo $i;
      echo '<br>';
    }

  ?>

</body>
</html>
