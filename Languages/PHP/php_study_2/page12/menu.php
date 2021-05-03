<?php
class Menu {
  public $name;
  public $price;
  public $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
  
  // Definisikan method getTaxIncludedPrice
  public function getTaxIncludedPrice(){
    return round($this->price * 1.0725, 2);
  }
  
}
?>