<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA</title>
</head>

<body>
    <h1>FORM UBAH DATA</h1>
    <hr>
    <p><a href="index.php">KEMBALI</a></p>
    <?php
    require_once "koneksi.php";
    $nis = $_GET['nis'];
    $query_tampildata = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
    $data = mysqli_fetch_array($query_tampildata);
    ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIS</td>
                <td> : </td>
                <td><input type="text" name="nis" value="<?= $data['nis']; ?>" readonly></td>
            </tr>
            <tr>
                <td>NAMA SISWA</td>
                <td> : </td>
                <td><input type="text" name="nama" value="<?= $data['nama_siswa']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol_ubah" value="UBAH"> </td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['tombol_ubah'])) {
        $nis = $_POST['nis'];
        $nama_siswa = $_POST['nama'];
        $query_ubahdata = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama_siswa' WHERE nis='$nis'");

        if ($query_ubahdata) {
            header('location : index.php');
        } else {
            echo "Perubahan data gagal dilakukan !!!";
        }
    }
    ?>

</body>

</html>