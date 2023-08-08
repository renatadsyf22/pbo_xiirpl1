<?php

require('../Class/class_perhitungan.php');

//instansiasi class persegi
$persegi = new perhitungan();



 
//memanggil method luas dari masing-masing class
echo $persegi->LuasPersegi(5); // Hanya membutuhkan sisi karena ini luas persegi

 
?>
