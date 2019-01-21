<?php
include '../konek/konek.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$jenis = $_POST['jenis_donasi'];
$jumlah = $_POST['jumlah_donasi'];

mysql_query("UPDATE donatur SET nama='$nama', alamat='$alamat', telephone='$telephone', jenis_donasi='$jenis', jumlah_donasi='$jumlah' WHERE id_donatur='$id'");

header("location:donatur.php");
?>
