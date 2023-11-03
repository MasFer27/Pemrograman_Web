<?php

/*
Nama    : FERLI
NIM     : 210511140
Kelas   : D
Prodi   : TIF
*/

echo "<h2>Menghitung Luas dan Keliling Belah Ketupat</h2>"; //judul
//Variabbel
$sisia = 40;
$sisib = 40;
$sisic = 40;
$sisid = 40;
$d1 = 20;
$d2 = 20;

//Rumus 
$luas = 1 / 2 * $d1 * $d2;

$keliling = $sisia + $sisib + $sisic + $sisid ;

//Output 
echo "Sisi A = " . $sisia;
echo "<br/>";
echo "Sisi B = " . $sisib;
echo "<br/>";
echo "Sisi C = " . $sisic;
echo "<br/>";
echo "Sisi D = " . $sisid;
echo "<br/>";
echo "Diameter 1 = " . $d1;
echo "<br/>";
echo "Diameter 2 = " . $d2;
echo "<br/>";
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;

?>