<!-- Import data.php -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <?php foreach ($menus as $menu): ?>
      <!-- Deklarasikan variable $orderCount -->
      <?php $orderCount = $_POST[$menu->getName()] ?>
      <p class="order-amount">
        <!-- Cetak property name milik $menu menggunakan method getName -->
        <?php echo $menu->getName() ?>
        x
        <!-- Cetak variable $orderCount -->
        <?php echo $orderCount ?>
      </p>
    <?php endforeach ?>
  </div>
</body>
</html>