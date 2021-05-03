<?php
class Menu {
  // Ubah property name, price, dan image ke private
  private $name;
  private $price;
  private $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
  
  // Definisikan method getName 
  public function getName() {
    return $this->name;
  }
  
  // Definisikan method getImage
  public function getImage() {
    return $this->image;
  }
  
  public function getTaxIncludedPrice() {
    return round($this->price * 1.0725, 2);
  }
  
}
?>