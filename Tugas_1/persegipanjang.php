<?php

/*
Nama    : FERLI
NIM     : 210511140
Kelas   : D
Prodi   : TIF
*/

echo "<h2>Menghitung Luas dan Keliling Persegi Panjang</h2>"; //judul
//Variabbel
$panjang = 20;
$lebar = 4;

//Rumus 
$luas = $panjang * $lebar;

$keliling =(2 * $panjang) + (2 * $lebar);

//Output 
echo "Panjang = " . $panjang;
echo "<br/>";
echo "Lebar = " . $lebar;
echo "<br/>";
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;

?>