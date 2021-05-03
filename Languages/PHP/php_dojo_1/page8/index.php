<?php
$menu = array('name' => 'GULAI', 'price' => 9);
echo 'Nilai $menu: ';
// var_export adalah function untuk melihat isi variable
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
echo $menu['name'].' berharga $'.$menu['price'];

?>