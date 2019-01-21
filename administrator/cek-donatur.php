<?php
include"konek/konek.php";
$tanggal = date("Y-m-d");

mysql_query  (  "INSERT  INTO  donatur
	(nama,alamat,telephone,jenis_donasi,jumlah_donasi,tanggal)  VALUE
('$_POST[nama]','$_POST[alamat]','$_POST[telephone]','$_POST[jenis_donasi]','$_POST[jumlah_donasi]','$tanggal')");
header('location: ../zona-donasi/daftar-donasi.html');
