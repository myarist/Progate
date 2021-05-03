<?php
class Menu {
  public $name;
  
  public function hello() {
    // Cetak "Saya adalah ____"
    echo "Saya adalah ".$this->name;
    
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>