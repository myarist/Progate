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
      <?php 
        $orderCount = $_POST[$menu->getName()];
        // Atur property orderCount milik $menu ke $orderCount menggunakan method setOrderCount
        $menu->setOrderCount($orderCount);
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
      </p>
      <!-- Panggil method getTotalPrice menggunakan $menu dan cetak harga total -->
      <p class="order-price">$<?php echo $menu->getTotalPrice() ?></p>
    <?php endforeach ?>
  </div>
</body>
</html>