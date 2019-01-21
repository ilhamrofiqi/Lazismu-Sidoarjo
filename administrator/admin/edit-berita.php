<?php
 include "../konek/konek.php";
 ?>
  <!doctype html>
  <html>

  <head>
    <title>Lazismu Sidoarjo</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="../../asset/img/index.png">
  </head>

  <body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li class="border"><a href="index.php">Dashboard<span class="sr-only">(current)</span></a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="donatur.php">Donatur</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php">
            <i class="fa fa-sign-out" aria-hidden="true">&ensp;</i>Logout</a></li>
            <li><a href="../../index.html">
            <i class="fa fa-home" aria-hidden="true">&ensp;</i>Beranda</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- session login -->
    <?php
  include "../konek/konek.php";
  session_start();
  if($_SESSION['status'] !="login"){
    header('location:../index.php');
}
echo  "";
?>

<!-- Edit Berita -->
<?php
include "../konek/konek.php";
$id = $_GET['id'];
$query_mysql = mysql_query("SELECT * FROM berita WHERE id_berita='$id'");
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
      <div class="add-berita" id="add-berita">
        <div class="container">
          <h2 class="text-center"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit Berita</h2>
          <div class="row">
            <form class="" action="update-berita.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $data['id_berita'] ?>">
              <div class="col-md-10 col-lg-10 col-lg-offset-1">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"><p>Judul Berita</p></span>
                  <input class="form-control" aria-describedby="sizing-addon1" type="text" name="judul_berita" value="<?php echo $data['judul_berita'] ?>" required="">
                </div><br>
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon2"><p>Penulis</p></span>
                  <input class="form-control" aria-describedby="sizing-addon1" type="text" name="penulis_berita" value="<?php echo $data['penulis_berita'] ?>" required="">
                </div><br>
                <div class="input-group input-group-lg ">
                  <span class="input-group-addon" id="sizing-addon2"><p>Intro Berita</p></span>
                  <textarea class="form-control" name="intro_berita" value=""><?php echo $data['intro_berita']; ?></textarea>
                </div><br>
                <textarea class="ckeditor" name="isi_berita" value=""><?php echo $data['isi_berita']; ?></textarea><br>
                <button class="btn btn-lg" type="submit" name="kirim">Simpan</button>
              </div>
              </from>
              <?php } ?>
          </div>
        </div>
      </div>


      <!-- javascrip -->
      <script src="asset/js/jquery-1.11.0.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/ckeditor/ckeditor.js"></script>
  </body>

  </html>
