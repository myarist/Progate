<?php
class Review {
  private $menuName;
  // Deklarasikan property private $userName
  private $userName;
  
  private $body;

  // Tambahkan $userName ke parameter kedua
  public function __construct($menuName, $userName, $body) {
    $this->menuName = $menuName;
    // Tetapkan $userName ke property userName
    $this->userName = $userName;
    
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }
  
  // Definisikan method getUser
  public function getUser($users) {
    foreach ($users as $user) {
      if ($user->getName() == $this->userName) {
        return $user;
      }
    }
  }
  
}

?>