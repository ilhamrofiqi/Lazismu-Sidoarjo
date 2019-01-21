<?php

include '../konek/konek.php';
$id = $_POST['id'];
$judul = $_POST['judul_berita'];
$penulis = $_POST['penulis_berita'];
$intro = $_POST['intro_berita'];
$isi = $_POST['isi_berita'];

mysql_query("UPDATE berita SET judul_berita='$judul', penulis_berita='$penulis', intro_berita='$intro', isi_berita='$isi' WHERE id_berita='$id'");

header("location:berita.php");
?>
