<?php
class Menu {
  public $name;
  // Deklarasikan property $price
  public $price;
  // Deklarasikan property $image 
  public $image;
  
  // Tambahkan parameter $price dan $image ke constructor
  public function __construct($name, $price, $image) {
    $this->name = $name;
    // Tetapkan $price ke property price
    $this->price = $price;
    // Tetapkan $image ke property image 
    $this->image = $image;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}
?>