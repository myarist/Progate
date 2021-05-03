<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- Tulis ulang kode di bawah ini menggunakan getter milik property image -->
          <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
          <!-- Tulis ulang kode di bawah ini menggunakan getter milik property name -->
          <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
          <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?> (tax included)</p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
