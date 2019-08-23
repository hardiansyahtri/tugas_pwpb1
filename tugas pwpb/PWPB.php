<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PWPB</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <style type="text/css">
    .user {
display: inline-block;
width: 150px;
height: 150px;
border-radius: 50%;
object-fit: cover;
}
 .user2 {
display: inline-block;
width: 150px;
height: 150px;
object-fit: cover;
}
.header{
  background-color: #000080;
  {
  </style>
  }
</head>

<?php
$nama_hardi = "Hardiansyah Tri Syahputra";
$umur_hardi = 16;
$tinggi_hardi = 168;

$nama_tiara = "Tiara Agustina";
$umur_tiara = 17;
$tinggi_tiara = 157;

$nama_ragil = "Ragillah Syah Pratama";
$umur_ragil = 16;
$tinggi_ragil = 172;
$rata_rata = ($tinggi_tiara + $tinggi_hardi + $tinggi_ragil) / 3;
?>

<?php
$gif_kubus = "foto/kubus.gif";
$nama_kubus = "KUBUS";
$luas_kubus = "6 x(SxS)";
$volume_kubus = "Sisi x sisi x sisi";

$gif_balok = "foto/balok.gif";
$nama_balok = "BALOK";
$luas_balok = "(2 x p x l)+(2 x p x t)+(2 x l x t)";
$volume_balok = "P x L x T";

$gif_tabung = "foto/tabung.gif";
$nama_tabung = "TABUNG";
$luas_tabung = "(2 x phi x r x r)+(phi x d x t)";
$volume_tabung = "Sisi x sisi x sisi";

$gif_kerucut = "foto/kerucut.gif";
$nama_kerucut = "KERUCUT";
$luas_kerucut = "(phi x r x r)+(phi x r x s)";
$volume_kerucut = "1/3 x phi x r x r x t";

$gif_bola = "foto/bola.gif";
$nama_bola = "BOLA";
$luas_bola = "4 x phi x r x r";
$volume_bola = "4/3 x phi x r x r x r";

$gif_prisma = "foto/prisma.gif";
$nama_prisma = "PRISMA SEGITIGA";
$luas_prisma = "(s + s + s) x T";
$volume_prisma = "1/2 x a x t x T";
?>
<body id="page-top">

  <!-- NAVIGASI -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PEMROGRAMAN WEB PERANGKAT BERGERAK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">First Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Second Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">About</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary js-scroll-trigger" href="#home">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--AKHIR NAVIGASI-->

<!--HEADER-->
<header class="bg-primary text-white">
  <section id="home">
    <div class="container text-center">
      <h1 class="masthead-heading text-uppercase mb-0" >WELCOME TO OUR WEBSITE</h1>
      <p class="lead">This is the PWPB assignment website from first group ✔</p>
    </div>
  </section>
</header>
<!--AKHIR HEADER-->

<!--TUGAS PERTAMA-->

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2>BIODATA</h2>
          <br>
          <div class="container">
          <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="foto/hardi.jpg" alt="" class="user"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_hardi?></li>
            <li>Umur: <?=$umur_hardi?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_hardi?> cm</li>
          </ul>
        </div>
        </div>
      </div>

          <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal"><img src="foto/tiara2.jpg"  alt="" class="user"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_tiara?></li>
            <li>Umur: <?=$umur_tiara?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_tiara?> cm</li>
          </ul>
        </div>
        </div>
      </div>

    <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal"><img src="foto/agil.jpg" alt="" class="user"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_ragil?></li>
            <li>Umur: <?=$umur_ragil?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_ragil ?> cm</li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    <br>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<p class="lead">Rata rata tinggi kami = <?php echo printf("%.2f", $rata_rata)?> cm</p>
</div>
  </section>

  <!--AKHIR TUGAS PERTAMA-->

<!--TUGAS KEDUA-->

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2>TUGAS KEDUA</h2>
          <p class="lead">
          <br>
          <div class="container">
          <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_kubus ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_kubus?></li>
            <li>luas: <?=$luas_kubus?></li>
            <li>volume: <?=$volume_kubus?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

            <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_balok ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_balok?></li>
            <li>luas: <?=$luas_balok?></li>
            <li>volume: <?=$volume_balok?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

           <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_prisma ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_prisma?></li>
            <li>luas: <?=$luas_prisma?></li>
            <li>volume: <?=$volume_prisma?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

           <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_tabung ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_tabung?></li>
            <li>luas: <?=$luas_tabung?></li>
            <li>volume: <?=$volume_tabung?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

           <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_bola ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li> <?=$nama_bola?></li>
            <li>luas: <?=$luas_bola?></li>
            <li>volume: <?=$volume_bola?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

          <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow float-left">
          <div class="card-header float-left">
          <h4 class="my-0 font-weight-normal"><img src="<?= $gif_kerucut ?>" alt="" class="user2"></h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li><?=$nama_kerucut?></li>
            <li>luas: <?=$luas_kerucut?></li>
            <li>volume: <?=$volume_kerucut?></li>
          </ul>
        </div>
        </div>
      </div>
          </p>

        </div>
      </div>
    </div>
  </section>

  <!--AKHIR TUGAS KEDUA-->

  <!--TENTANG-->

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2>ABOUT</h2>
          <p class="lead"> This Website is a first group assignment from PWPB lessons,which consists of the first to fourth assignment</p>
        </div>
      </div>
    </div>
  </section>

  <!--AKHIR TENTANG-->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; First Group.2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
