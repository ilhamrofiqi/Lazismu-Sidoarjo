<?php
include "../konek/konek.php";
$id = $_GET['id'];
mysql_query("DELETE FROM donatur WHERE id_donatur='$id'")or die(mysql_error());

header("location:donatur.php");
?>
