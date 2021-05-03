<?php
// Pindahkan class Menu kesini
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

?>