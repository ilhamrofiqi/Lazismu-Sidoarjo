<?php
include "../konek/konek.php";
$id = $_GET['id'];
mysql_query("DELETE FROM berita WHERE id_berita='$id'")or die(mysql_error());

header("location:berita.php");
?>
