<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazismu Sidoarjo</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<?php
session_start(); // memulai session

include "konek/konek.php";
$username = mysql_real_escape_string(trim($_POST['username']));
$sql=mysql_query("SELECT username,password FROM admin WHERE username = '$username'");
$data=mysql_fetch_array($sql);

// bandingkan password yang dikirim dari form login dengan password
// yang ada di database
if( password_verify($_POST['password'], $data['password'])){

// untuk mendeteksi apakah user tersebut memang terdaftar,
// jika terdaftar, maka tidak akan menghasilkan nilai 0 (null)
$hasil=mysql_num_rows($sql);

// membandingkan nilai tersebut dengan 0
if ($hasil > 0 )
session_start();
//meng-isi-kan variable yang telah dibentuk
$_SESSION[username]=$data[username];
$_SESSION[password]=$data[password];
$_SESSION['status']="login";
header('location:admin/index.php');
}
else
{
echo  "<h2 class= text-center>Login gagal!<br> Username tidak terdaftar atau password salah</h2><h2 class= text-center><a href=\"index.php\">Ulangi Lagi</a></h2>";
}
?>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>

</html>
