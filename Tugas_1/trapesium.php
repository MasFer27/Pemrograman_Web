<?php

/*
Nama    : FERLI
NIM     : 210511140
Kelas   : D
Prodi   : TIF
*/

echo "<h2>Menghitung Luas dan Keliling Trapesium</h2>"; //judul
//Variabbel
$sisia = 50;
$sisib = 30;
$sisic = 50;
$sisid = 30;
$tinggi = 30;

//Rumus 
$luas = (($sisia + $sisib) / 2 )* $tinggi;

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
echo "Tinggi = " . $tinggi;
echo "<br/>";
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;

?>