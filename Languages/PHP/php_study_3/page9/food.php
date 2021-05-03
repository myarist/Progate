<?php 
require_once('menu.php');

class Food extends Menu {
  // Deklarasikan property private bernama $spiciness
  private $spiciness;
  
  // Override method __construct class induk
  public function __construct($name, $price, $image, $spiciness) {
    parent::__construct($name, $price, $image);
    $this->spiciness = $spiciness;
  }
  
  // Definisikan method getSpiciness 
  public function getSpiciness() {
    return $this->spiciness;
  }
  
}

?>