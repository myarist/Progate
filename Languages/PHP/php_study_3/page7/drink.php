<?php 
require_once('menu.php');

class Drink extends Menu {
  private $type;
  
  // Salin method __construct dari class Menu 
  // Tambahkan $type ke parameter
  public function __construct($name, $price, $image, $type) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
    
    // Tetapkan $type ke property type
    $this->type = $type;
    
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>