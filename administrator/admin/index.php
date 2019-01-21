<!doctype html>
<html>

<head>
  <title>Lazismu Sidoarjo</title>
  <!-- Bootstrap -->
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
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
          <li><a href="http://localhost:8080/lazismusidoarjo.org/">
            <i class="fa fa-home" aria-hidden="true">&ensp;</i>Beranda</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Dashboard -->
  <div class='dashboard' id='dashboard'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 text-center'>
          <?php
          include "../konek/konek.php";
          session_start();
          if($_SESSION['status'] !="login"){
            header('location:../index.php');
        }
        echo  "<h1 'class= wow zoomIn'> ASSALAMUALAIKUM WR.WB ADMIN ".  $_SESSION['username'];
        ?>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div id="foooter" class="footer">
    <div class="container text-center">
      <p>&copy; Copyright 2017 lazismu</p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery-1.11.0.js"></script>
  <script src="../asset/js/functions.js"></script>

</body>
</html>
