<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="asset/img/index.png">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Lazismu Sidoarjo - Berita</title>

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

  <!-- header -->
  <div class="header" id="header">
    <h1 class="text-center">List Berita</h1>
  </div>

  <!-- konten -->
  <?php
   include "administrator/konek/konek.php";

   $batas = 4;
   $pg    = isset($_GET['pg']) ? $_GET['pg']: "";

   if (empty($pg)) {
     $posisi = 0;
     $pg     = 1;
   } else {
     $posisi = ($pg - 1)* $batas;
   }

   $sql = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT $posisi, $batas");
   $no  = 1 + $posisi;
   while ($row = mysql_fetch_assoc($sql)) {
   ?>

  <div class="konten" id="konten">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1">
          <div class="pack">
        <a href="content.php?post=<?php echo $row["judul_berita"];?>">
          <b><?php echo $row["judul_berita"]; ?></b>
        </a>
          <p><?php echo $row["intro_berita"]; ?></p>
          <i>Posted By <?php echo $row["penulis_berita"]; ?> on <?php echo date("d F Y", strtotime ($row["tanggal"])) ?></i>
        </div>
        </div>
      </div>
    </div>
  </div>
  <br>

<?php $no++;  } ?>

<ul class="text-center page">
  <?php
  $jml_data   = mysql_num_rows(mysql_query("SELECT * FROM berita"));
  $jmlhalaman = ceil($jml_data/$batas);

  if ($pg > 1) {
    $link = $pg - 1;
    $prev =  "<a href='?pg=$link'><button class='btn' type='button' name='button'>Sebelumnya</button></a>";
  } else {
    $prev = "Sebelumnya";
  }

  $nmr ="";
  for($i=1; $i<=$jmlhalaman; $i++ ){

    if ($i == $pg) {
      $nmr .=$i. "";
    }else {
      $nmr .="<a href='?pg=$i'>$i</a>";
    }
  }

if ($pg <$jmlhalaman) {
   $link = $pg + 1;
   $next = "<a href='?pg=$link'><button class='btn' type='button' name='button'>Selanjutnya</button></a>";
}else {
  $next = "Selanjutnya";
}

echo "$prev &nbsp; &nbsp; &nbsp; $next";
  ?>
</ul>
  <!-- footer -->
  <div id="foooter" class="footer">
    <div class="container text-center">
      <p>&copy; Copyright 2017 lazismu</p>
    </div>
  </div>


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
