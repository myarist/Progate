<?php
class Menu {
  // Deklarasikan property $name
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// Tetapkan 'GULAI' ke property name $curry
$curry->name = 'GULAI';

// Tetapkan 'PASTA' ke property name $pasta
$pasta->name = 'PASTA';

// Cetak property name $curry
echo $curry->name;

echo '<br>';
// Cetak property name dari $pasta
echo $pasta->name;

?>