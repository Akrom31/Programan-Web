<?php
$nim = "121203011";
$nama = 'Akrom Hafifi';
$umur = 20;
$nilai = 100;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
?>