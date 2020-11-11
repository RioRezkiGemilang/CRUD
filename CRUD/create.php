<!DOCTYPE html>
<html>

<head>

    <title>FORM TAMBAH DATA</title>
</head>

<body>
    <h1>FORM TAMBAH DATA</h1>
    <hr>
    <p><a href="index.php">KEMBALI</a></p>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIS</td>
                <td> : </td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>NAMA SISWA</td>
                <td> : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol_simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    <?php

    require_once "koneksi.php";

    if (isset($_POST['tombol_simpan'])) {

        $nis = $_POST['nis'];
        $nama_siswa = $_POST['nama'];
        // echo $nis, $nama_siswa;
        // exit;
        $query_simpandata = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('','$nis','$nama_siswa')");

        if ($query_simpandata) {
            header('location: index.php');
        } else {
            echo "Penyimpanan data ke database gagal dilakukan!";
        }
    }
    ?>

</body>

</html>