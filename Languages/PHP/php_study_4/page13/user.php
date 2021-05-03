<?php
class User {
  // Deklarasikan property private $id  
  private $id;
  private $name;
  private $gender;
  // Deklarasikan property class private $count dengan 0 sebagai nilai awal  
  private static $count = 0;
  
  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;
    // Naikkan property class $count dengan 1
    self::$count++;
    
    // Tetapkan nilai property class $count ke property id    
    $this->id = self::$count;
    
  }
  
  // Definisikan method getId 
  public function getId() {
    return $this->id;
  }
  
  public function getName() {
    return $this->name;
  }

  public function getGender() {
    return $this->gender;
  }
}

?>