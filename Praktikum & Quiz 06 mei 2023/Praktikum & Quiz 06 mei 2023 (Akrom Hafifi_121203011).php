<?php
// Input data
$nip = 121203011;
$nama = "Akrom Hafifi";
$gaji_pokok = 2000000;
$bonus = 500000;
$tunjangan = 0.05 * $gaji_pokok;

// Hitung pajak
$pajak = 0.1 * ($gaji_pokok + $bonus + $tunjangan);

// Hitung gaji yang harus dibayarkan
$gaji_bersih = $gaji_pokok + $bonus + $tunjangan - $pajak;

// Output hasil
echo "===============================================<br>";
echo "NIP pegawai: $nip<br>";
echo "Nama pegawai: $nama<br>";
echo "===============================================<br>";
echo "Gaji pokok: $gaji_pokok<br>";
echo "Bonus gaji: $bonus<br>";
echo "Tunjangan: $tunjangan<br>";
echo "Pajak: $pajak<br>";
echo "===============================================<br>";
echo "Gaji yang harus dibayarkan: Rp.$gaji_bersih<br>";
echo "===============================================<br>";
?>