<?php
class Menu {
  public $name;
  
  // Definisikan constructor
  public function __construct(){
    echo "Sebuah instance telah diciptakan.";
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>