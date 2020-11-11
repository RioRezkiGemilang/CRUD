<!DOCTYPE html>
<html>

<head>

    <title>CRUD PHPMySQL</title>
</head>

<body>
    <center>
        <h1>CRUD DATA SISWA</h1>
        <hr>
        <p><a href="create.php">TAMBAH DATA</a></p>
        <table border="1" cellpadding="5" cellspacing="0" width="700">
            <tr>
                <td>No.</td>
                <td>NIS</td>
                <td>NAMA SISWA</td>
                <td>OPERASI</td>
            </tr>
            <?php

            require_once "koneksi.php";

            $no = 1;

            $query_datasiswa = mysqli_query($koneksi, "SELECT * FROM siswa");
            while ($data = mysqli_fetch_array($query_datasiswa)) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['nis']; ?> </td>
                    <td><?= $data['nama_siswa']; ?> </td>
                    <td>
                        <a href="update.php?nis=<?= $data['nis']; ?> ">Ubah</a>
                        <a href="delete.php?nis=<? $data['nis']; ?> ">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>
    </center>

</body>

</html>