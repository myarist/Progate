<?php
class Review {
  private $menuName;
  private $body;

  public function __construct($menuName, $body) {
    $this->menuName = $menuName;
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }
}

?>