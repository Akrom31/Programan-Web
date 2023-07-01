<?php 

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseName, $databaseUsername, $databasePassword);

if (!$mysqli) {
    die("koneksi gagal :" .mysqli_connect_error());
}
echo "koneksi berhasil";
$mysqli_close($mysqli);

?>