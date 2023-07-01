<?php

include("config.php");

//cek apakah tombol simpan sudah di klik atau belum?
if (isset($_POST['simpan'])) {
    
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buat query
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal'$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-siswa.php');
    } else {
        // kalau gagal alih kan ke halaman indes.php dengan status gagal
        header("Gagal menyimpan perbuahan..");
    }
} else {
    die("Akses dilarang...");
}

?>

?>