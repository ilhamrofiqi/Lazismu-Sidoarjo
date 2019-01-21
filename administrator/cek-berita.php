<?php
include"konek/konek.php";
$tanggal = date("Y-m-d");

mysql_query  (  "INSERT  INTO  berita
	(judul_berita,penulis_berita,intro_berita,isi_berita,tanggal)  VALUE
('$_POST[judul_berita]','$_POST[penulis_berita]','$_POST[intro_berita]','$_POST[isi_berita]','$tanggal')");
header('location: admin/berita.php');
