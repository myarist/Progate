<?php
require_once('menu.php');

class Drink extends Menu {
  private $type;
  
  public function __construct($name, $price, $image, $type) {
    // Hapus 4 baris dibawah
    
    // Panggil constructor class induk dan tetapkan argumentnya
    parent::__construct($name, $price, $image);
    
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