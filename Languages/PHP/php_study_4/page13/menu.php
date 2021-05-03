<?php
class Menu {
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return round($this->price * 1.0725, 2);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  public function getReviews($reviews) {
    $reviewsForMenu = array();
    foreach ($reviews as $review) {
      if ($review->getMenuName() == $this->name) {
        $reviewsForMenu[] = $review;
      }
    }
    return $reviewsForMenu;
  }
  
  
  public static function getCount() {
    return self::$count;
  }
  
  public static function findByName($menus, $name) {
    foreach ($menus as $menu) {
      if ($menu->getName() == $name) {
        return $menu;
      }
    }
  }
  
}
?>