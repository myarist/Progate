<?php
// Import menu.php
require_once('menu.php');

// Pindahkan deklarasi variable kesini 
$juice = new Menu('JUS');
$coffee = new Menu('KOPI');
$curry = new Menu('GULAI');
$pasta = new Menu('PASTA');

$menus = array($juice, $coffee, $curry, $pasta);

?>