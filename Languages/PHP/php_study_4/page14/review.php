<?php
class Review {
  private $menuName;
  // Ubah $userName ke $userId
  private $userId;
  private $body;

  // Ubah parameter $userName ke $userId
  public function __construct($menuName, $userId, $body) {
    $this->menuName = $menuName;
    // Ubah userName ke userId
    $this->userId = $userId;
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }
  
  public function getUser($users) {
    foreach ($users as $user) {
      // Tulis ulang code dibawah
      if ($user->getId() == $this->userId) {
        return $user;
      }
    }
  }
  
}

?>