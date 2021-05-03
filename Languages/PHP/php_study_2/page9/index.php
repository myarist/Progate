<?php
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

$juice = new Menu('JUS');
$coffee = new Menu('KOPI');
$curry = new Menu('GULAI');
$pasta = new Menu('PASTA');
// Deklarasikan array $menus
$menus = array($juice, $coffee, $curry, $pasta);

?>

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
      <!-- Ketik loop foreach -->
      <?php foreach ($menus as $menu): ?>
        <h3><?php echo $menu->name ?></h3>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
