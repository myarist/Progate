<?php
class Menu {
  public $name;
  
  // Definisikan method hello
  public function hello(){
    echo "Saya adalah instance dari class Menu";
  }
  
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
// Panggil method hello menggunakan $curry
$curry->hello();

echo '<br>';
// Panggil method hello menggunakan $pasta
$pasta->hello();

?>