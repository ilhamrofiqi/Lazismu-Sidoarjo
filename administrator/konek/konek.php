<?php
$server="localhost";  //definisi server lokal.
$user="root";  //definisi user.
$pass=""; //definisi password (menyesuaikan).
$db="dblazismu";  //definisi database yang telah dibuat tadi.
//mengkoneksikan server lokal.
mysql_connect($server,$user,$pass) or die ("Maaf,
koneksi gagal");
//memilih database.
mysql_select_db($db) or die ("Maaf, database tidak
ditemukan");
?>
