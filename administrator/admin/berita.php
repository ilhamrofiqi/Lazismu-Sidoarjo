<?php
 include "../konek/konek.php";
 ?>
  <!doctype html>
  <html>

  <head>
    <title>Lazismu Sidoarjo</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/css/dataTables.bootstrap.css" />
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

      <!-- Data Berita -->
      <div class="berita" id="berita">
        <div class="container">
          <h2 class="text-center">Data Berita</h2>
          <a href="add-berita.php"><button class="btn btn-lg " type="submit" name="kirim"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Tambah Berita</button></a>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="data">
                      <thead>
                        <tr>
                          <td>Id Berita</td>
                          <td>Judul Berita</td>
                          <td>Intro Berita</td>
                          <td>Penulis</td>
                          <td>Tanggal</td>
                          <td>Opsi</td>
                        </tr>
                      </thead>
                      <?php
        $data = mysql_query ("SELECT * FROM berita ORDER BY id_berita DESC");
        while ($row=mysql_fetch_array($data)){
          ?>
          <tr>
              <td>BRT-00<?php echo $row["id_berita"]; ?></td>
              <td><?php echo $row["judul_berita"]; ?></td>
              <td><?php echo $row["intro_berita"]; ?></td>
              <td><?php echo $row["penulis_berita"]; ?></td>
              <td><?php echo date("d F Y", strtotime ($row["tanggal"])) ?></td>
              <td>
                  <a class="edit" href="edit-berita.php?id=<?php echo $row["id_berita"]; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                  <a class="hapus" href="hapus-berita.php?id=<?php echo $row["id_berita"]; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
              </td>
              <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- javascrip -->
      <script src="asset/js/jquery-1.11.0.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/datatables/jquery.dataTables.js"></script>
      <script src="asset/datatables/dataTables.bootstrap.js"></script>
      <script>
        $(document).ready(function() {
          var t = $('#data').DataTable();
        });
      </script>
  </body>

  </html>
