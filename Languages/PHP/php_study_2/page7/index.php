<?php
class Menu {
  public $name;
  
  // Tambahkan parameter $name ke constructor
  public function __construct($name) {
    // Tetapkan $name ke property name
    $this->name = $name;
    
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

// Berikan 'GULAI' ke new Menu() sebagai argument
$curry = new Menu("GULAI");
// Berikan 'PASTA' ke new Menu() sebagai argument
$pasta = new Menu("PASTA");
// Hapus satu baris dibawah

// Hapus satu baris dibawah

$curry->hello();
echo '<br>';
$pasta->hello();

?>