<?php
class User {
  private $id;
  private $name;
  private $gender;
  private static $count = 0;
  
  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;
    self::$count++;
    $this->id = self::$count;
  }
  
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