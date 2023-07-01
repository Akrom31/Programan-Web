<?php

include("config.php");

//kalau tidak ada id di query string
if ( !isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang di edit tidak di temukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak di temukan..");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | Universitas Paramadina</title>
    </head>

    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>

        <form action="proses-edit.php">
            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
            
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="nama">Alamat: </label>
                    <textarea name="alamat"></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki - Laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                        <select name="agama">
                            <option>Islama</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>

            </fieldset>


        </form>

    </body>
</html> 