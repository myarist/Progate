<?php
class Menu {
  private $name;
  private $price;
  private $image;
  // Deklarasikan property $orderCount dengan nilai awal 0
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo 'I am '.$this->name;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  // Definisikan method getOrderCount 
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  // Definisikan method setOrderCount 
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return round($this->price * 1.0725, 2);
  }
  
}
?>