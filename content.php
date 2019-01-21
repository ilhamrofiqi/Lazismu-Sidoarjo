<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="asset/img/index.png">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php
   include "administrator/konek/konek.php";
   $judul = $_GET['post'];
   $data = mysql_query ("SELECT * FROM berita WHERE judul_berita='$judul'");
   $nomor = 1;
   while ($row=mysql_fetch_array($data)){
   ?>
  <title>Lazismu Sidoarjo - <?php echo $row["judul_berita"]; ?></title>
  <?php } ?>

  <!-- Bootstrap -->
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/css/animate.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>

<body>
  <!-- info -->
  <div id="info" class="info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <script type='text/javascript' class="jam">
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
              thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
          </script>
        </div>
      </div>
    </div>
  </div>

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
        <a href="http://localhost:8080/lazismusidoarjo.org/"><img class="brand" src="asset/img/logo1.png" alt="lazismu sidoarjo"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="border"><a href="http://localhost:8080/lazismusidoarjo.org/">Beranda <span class="sr-only">(current)</span></a></li>
          <li><a href="berita.php">Berita</a></li>
          <li><a href="program.html">Program</a></li>
          <li><a href="tentang-kami.html">Tentang Kami</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- konten -->
  <?php
   include "administrator/konek/konek.php";
   $judul = $_GET['post'];
   $data = mysql_query ("SELECT * FROM berita WHERE judul_berita='$judul'");
   $nomor = 1;
   while ($row=mysql_fetch_array($data)){
   ?>
  <div class="post" id="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
          <div class="pack">
          <h1><?php echo $row["judul_berita"]; ?></h1>
          <i>Posted By <?php echo $row["penulis_berita"]; ?> on <?php echo date("d F Y", strtotime ($row["tanggal"])); ?></i>
          <div class="isi_berita">
            <?php echo $row["isi_berita"];?>
          </div>
          <div class="share">
          <h4>Share article: </h4>
          <a href="http://www.facebook.com/sharer.php?u=http://localhost:8080/lazismusidoarjo.org/content.php?post=<?php echo $row["judul_berita"];?>" target="_blank">
            <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
          </a>&nbsp;
          <a href="https://plus.google.com/share?url=http://localhost:8080/lazismusidoarjo.org/content.php?post=<?php echo $row["judul_berita"];?>" target="_blank">
            <i class="fa fa-google-plus-official fa-3x" aria-hidden="true"></i>
          </a>&nbsp;
          <a href="http://twitter.com/home?status= <?php echo $row["judul_berita"];?> - http://localhost:8080/lazismusidoarjo.org/content.php?post=<?php echo $row["judul_berita"];?> - by Lazismu Sidoarjo" target="_blank">
            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
          </a>&nbsp;
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://localhost:8080/lazismusidoarjo.org/content.php?post=<?php echo $row["judul_berita"];?>&summary=" target="_blank">
            <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
          </a>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php } ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery-3.2.1.min.js"></script>
  <script src="asset/js/functions.js"></script>
  <script src="asset/js/jquery.cycle2.min.js"></script>
  <script src="asset/js/wow.min.js">
  </script>
  <script>
    new WOW().init();
  </script>

</body>
</html>
