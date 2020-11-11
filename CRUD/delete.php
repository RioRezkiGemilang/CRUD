<?php

require_once "koneksi.php";
$nis = $_GET['nis'];
$query_hapusdata = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='");
if ($query_hapusdata) {
    header('location: index.php');
} else {
    echo "Penghapusan data gagal dilakukan !!";
}
