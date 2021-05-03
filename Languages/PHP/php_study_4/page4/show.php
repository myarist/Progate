<?php
// Import menu.php
require_once('menu.php');

// Import data.php
require_once('data.php');

$menuName = $_GET['name'];
// Panggil method findByName dari class Menu 
$menu = Menu::findByName($menus, $menuName);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper container">
    <!-- Tempelkan code dibawah -->
    <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>

    <?php if ($menu instanceof Drink): ?>
      <p class="menu-item-type"><?php echo $menu->getType() ?></p>
    <?php else: ?>
      <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
      <?php endfor ?>
    <?php endif ?>
    <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?></p>
    <a href="index.php">← Kembali ke Menu</a>
    
  </div>
</body>
</html>