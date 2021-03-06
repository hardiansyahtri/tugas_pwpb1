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

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="">Pemograman Web Perangkat Bergerak</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger p-2" href="#team">first task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">second task</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Pendaftaran">third task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light js-scroll-trigger" href="#page-top">home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
$nama_hardi = "Hardiansyah Tri S.";
$umur_hardi = 16;
$tinggi_hardi = 168;

$nama_tiara = "Tiara Agustina";
$umur_tiara = 17;
$tinggi_tiara = 157;

$nama_ragil = "Ragillah Syah Pratama";
$umur_ragil = 16;
$tinggi_ragil = 172;
$rata_rata = ($tinggi_tiara + $tinggi_hardi + $tinggi_ragil) / 3;

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
$luas_tabung = "(2 x π x r x r)+(π x d x t)";
$volume_tabung = "Sisi x sisi x sisi";

$gif_kerucut = "foto/kerucut.gif";
$nama_kerucut = "KERUCUT";
$luas_kerucut = "(π x r x r)+(π x r x s)";
$volume_kerucut = "1/3 x π x r x r x t";

$gif_limas = "foto/limas.gif";
$nama_limas = "LIMAS SEGIEMPAT";
$luas_limas = "luas alas x laus sisi tegak";
$volume_limas = "1/3 x lauas limas x tinggi";

$gif_prisma = "foto/prisma.gif";
$nama_prisma = "PRISMA SEGITIGA";
$luas_prisma = "luas alas x luas sisi tegak";
$volume_prisma = "1/3 x luas limas x tinggi";
?>
  <!-- Header -->
  <header class="masthead">
    <section class="page-section" id="page-top">
       <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Welcome! </div>
        <div class="intro-lead-in">This is the PWPB assignment website from first group</div>
      </div>
    </div>
    </section>
  </header>


  <!-- Team -->
  <section class=" page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Biodata</h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="foto/hardi.jpg" alt="">
            <h4><?=$nama_hardi?></h4>
            <p class="text-muted">
               <ul class="list-unstyled mt-3 mb-4">
            <li>Umur: <?=$umur_hardi?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_hardi?> cm</li>
          </ul>
            </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="foto/tiara2.jpg" alt="">
            <h4><?=$nama_tiara?></h4>
            <p class="text-muted">
              <ul class="list-unstyled mt-3 mb-4">
            <li>Umur: <?=$umur_tiara?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_tiara?> cm</li>
          </ul>
            </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="foto/agil.jpg" alt="">
            <h4><?=$nama_ragil?></h4>
            <p class="text-muted">
               <ul class="list-unstyled mt-3 mb-4">
            <li>Umur: <?=$umur_ragil?> Tahun</li>
            <li>Tinggi Badan: <?=$tinggi_ragil ?> cm</li>
          </ul>
            </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
h                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<p class="lead">Rata rata tinggi kami = <?php echo printf("%.2f", $rata_rata)?> cm</p>
</div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Geometry</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_kubus ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_kubus?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_balok ?> " alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_balok?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_prisma ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_prisma?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_tabung ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_tabung?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_limas ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_limas?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?= $gif_kerucut ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?=$nama_kerucut?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
      </div>
    </div>
  </section>







  <!--tugas ketiga-->
   <section class="" id="Pendaftaran">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Pendaftaran</h2>
        </div>
      </div>
      <div class="konten">
        <br>
        <div class="card card-register mx-auto mt-5">
        <div class="card-header">
          <center>
             <h5>
                DATA IDENTITAS PESERTA DIDIK BARU<br>
                TAHUN AJARAN 2019/2018
              </h5>
          </center>
        </div>
    <div class="card-body">
    <form action="" method="POST">
      <div class="col-md-5">
      <td><b>Nama lengkap :</b></td>
      <input type="text" name="Nale" class="form-control" size="35" placeholder=" Nama Lengkap...">

      <td><b>Nama Panggilan :</b></td>
      <input type="text" name="napa" class="form-control" size="35" placeholder=" Nama Panggilan...">

       <td><b>Tempat Tanggal Lahir :</b></td>
      <br>
      <input type="text" name="tempat" placeholder="   Tempat">  <input type="date" name="tanggal">
      <br>

      <td><b>Jenis Kelamin :</b></td>
      <br>
      <input type="radio" name="jk" value="Laki-Laki">  Laki-Laki<br>
      <input type="radio" name="jk" value="Perempuan">  Perempuan<br>
      <td><b>Alamat :</b></td>
      <br>
      <textarea  name="almt" class="form-control" placeholder=" Alamat Anda..."></textarea>
      <td><b>NISN :</b></td>
      <input type="number" name="nisn" class="form-control" size="10" placeholder=" No NISN..." >
      
      <td><b>NIK :</b></td>
      <input type="number" name="nik" class="form-control" size="10" placeholder=" No NIK..." >
      
      <td><b>No SKHU :</b></td>
      <input type="number" name="skhu" class="form-control" size="10" placeholder=" No SKHU..." >
      
     <td><b> Asal Sekolah :</b></td>
      <input type="text" name="askol" class="form-control" size="35" placeholder=" Asal Sekolah..." >

      <td><b>Tanggal Diterima Disekolah Ini :</b></td>
      <br>
       <input type="date" name="tgl">
     <br>
      <td><b>Alasan Pindah Ke Sekolah Ini :</b></td>
       <textarea name="jpsapksi" class="form-control" placeholder=" Silahkan Jelaskan..."></textarea>

      <td><b>Agama :</b></td>
      <br>
      <input type="radio" name="agm" value="Islam"> Islam<br>
        <input type="radio" name="agm" value="Kristen"> Kristen<br>
        <input type="radio" name="agm" value="Katolik"> Katolik<br>
        <input type="radio" name="agm" value="Bhuda"> Bhuda<br>
        <input type="radio" name="agm" value="Hindu"> Hindu<br>
        <input type="radio" name="agm" value="Kong Hu Cu"> Kong Hu Cu<br>
          
      <td><b>Tinggal Bersama :</b></td>
      <br>
      <input type="radio" name="tb" value="Orang Tua" > Orang Tua<br>
      <input type="radio" name="tb" value="Wali" > Wali<br>
      
      <td><b>Transportasi Ke Sekolah :</b></td>
      <br>
      <input type="checkbox" name="tks" value="motor" > Naik Sepeda Motor<br>
      <input type="checkbox" name="tks" value="sepeda" > Naik Sepeda<br>
      <input type="checkbox" name="tks" value="angkot" > Naik Angkot<br>
      <input type="checkbox" name="" value="jalan" > Jalan Kaki <br>
      
      <td><b>No Telp :</b></td>
      <input type="number" name="telp" class="form-control" size="10" placeholder=" No Telp..." >
      
      <td><b>No KPS :</b></td>
      <input type="number" name="kps" class="form-control" size="10" placeholder=" No KPS..." >
      <br>
      <br>
     <h4><b>Data Ayah Kandung : </b></h4>
       <td><b>Nama </b></td>
      <input type="text" name="nma" class="form-control" size="35" placeholder=" Nama Ayah...">
      <b>Tahun Lahir :</b><br>
         <input type="text" name="tla" placeholder="    tempat">  <input type="date" name="tanggal">
      <br>
      <td><b>Pendidikan :</b></td>
    <input type="text" name="pndk" class="form-control" size="35" placeholder=" Pendidikan Ayah...">
    <td><b>Pekerjaan :</b></td>
    <br>
    <input type="text" name="pkrj" class="form-control" size="35" placeholder=" Pekerjaan Ayah...">

      <td><b>Penghasilan Perbulan :</b></td>
        <br>
   <input type="radio" name="pb" value="1.500.000">1.500.000<br>
   <input type="radio" name="pb" value="2.000.000" >2.000.000<br>
   <input type="radio" name="pb" value="2.500.000">2.500.000<br>
   <input type="radio" name="pb" value="3.000.000">3.000.000<br>
   <input type="radio" name="pb" value="4.000.000">4.000.000<br>
   <input type="radio" name="pb" value="5.000.000">5.000.000<br>
   <input type="radio" name="pb" value="10.000.000">10.000.000<br>
   <br>
   <br>
   <br>
        <h4><b>Data Ibu Kandung : </b></h4>
     <br>
       <td><b>Nama </b></td>
      <input type="text" name="nmi" class="form-control" size="35" placeholder=" Nama Ibu...">
    <td><b>Tahun Lahir</b></td>
    <br>
         <input type="text" name="tli" placeholder="tempat...">  <input type="date" name="tanggal">
      <br>
      <td><b>Pendidikan :</b></td>
    <input type="text" name="pndkn" class="form-control" size="35" placeholder=" Pendidikan Ibu...">
    <td><b>Pekerjaan :</b></td>
    <input type="text" name="pkrjn" class="form-control" size="35" placeholder=" Pekerjaan Ibu...">
      <td><b>Penghasilan Perbulan</b></td>>
   <input type="radio" name="pb2" value="1000.000">1000.000<br>
   <input type="radio" name="pb2" value="1500.000" >1500.000<br>
   <input type="radio" name="pb2" value="2000.000">2000.000<br>
   <input type="radio" name="pb2" value="2500.000">2500.000<br>
   <input type="radio" name="pb2" value="3000.000">3000.000<br>
    <input type="radio" name="pb2" value="4000.000">4000.000<br>
   <br>
   <br>
   <br>
  <input type="submit" name="daftar" value="daftar" class="btn btn-primary" id="Pendaftaran">
    <input type="reset" name="batal" value="batal" class="btn btn-primary" id="Pendaftaran">
    <br>
    <br>
  </div>
  </form>
</div>
</section>
</body>
</html>

   <section class="" id="Pendaftaran">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"></h2>
        </div>
      </div>
      <div class="konten">
        <br>
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">
          <center>
             <h5>
                DATA IDENTITAS PESERTA DIDIK BARU<br>
                TAHUN AJARAN 2019/2018
              </h5>
          </center>
        </div>
    <div class="card-body">
    <form action="" method="POST">
 <?php
    if(isset($_POST['Nale'])){
    echo "<b>Nama Lengkap : </b>".$_POST['Nale']. "<br>";
  }
  if(isset($_POST['napa'])){
    echo "<b>Nama Panggilan : </b>".$_POST['napa']. "<br>";
  }
    if(isset($_POST['jk'])){
    echo "<b>Jenis Kelamin : </b>".$_POST['jk']. "<br>";
  }
  if(isset($_POST['nisn'])){
    echo "<b>NISN : </b>".$_POST['nisn']. "<br>";
  }
  if(isset($_POST['nik'])){
    echo "<b>NIK : </b>".$_POST['nik']. "<br>";
  }
    if(isset($_POST['skhu'])){
    echo "<b>No SKHU : </b>".$_POST['skhu']. "<br>";
  }
   if(isset($_POST['tempat'])){
    echo "<b>Tempat : </b>".$_POST['tempat'];
  }
    if(isset($_POST['tanggal'])){
    echo "<b>Tanggal : <b>".$_POST['tanggal']. "<br>";
  }
    if(isset($_POST['askol'])){
    echo "<b>Asal Sekolah : </b>".$_POST['askol']. "<br>";
  }
    if(isset($_POST['tgl'])){
    echo "<b>Tanggal Diterima Disekolah Ini :</b> ".$_POST['tgl']. "<br>";
  }
    if(isset($_POST['jpsapksi'])){
    echo "<b>Alasan Pindah Ke Sekolah Ini : </b>".$_POST['jpsapksi']. "<br>";
  }
    if(isset($_POST['agm'])){
    echo "<b>Agama : </b>".$_POST['agm']. "<br>";
  }
   if(isset($_POST['almt'])){
    echo "<b>Alamat : </b>".$_POST['almt']. "<br>";
  }
    if(isset($_POST['tb'])){
    echo "<b>Tinggal Bersama : </b>".$_POST['tb']. "<br>";
  }
    if(isset($_POST['tks'])){
    echo "<b>Transportasi Ke Sekolah : </b>".$_POST['tks']. "<br>";
  }
    if(isset($_POST['telp'])){
    echo "<b>No Telp : </b>".$_POST['telp']. "<br>";
  }
    if(isset($_POST['kps'])){
    echo "<b>No KPS : </b>".$_POST['kps']. "<br><br>";
  }
  echo "DATA AYAH KANDUNG<br><br>";
    if(isset($_POST['nma'])){
    echo "<b>Nama Ayah : </b>".$_POST['nma']. "<br>";
  }
      if(isset($_POST['tla'])){
    echo "<b>Tahun Lahir Ayah : </b>".$_POST['tla']. "<br>";
  }
      if(isset($_POST['pndk'])){
    echo "<b>Pendidikan Ayah : </b>".$_POST['pndk']. "<br>";
  }
      if(isset($_POST['pkrj'])){
    echo "<b>Pekerjaan Ayah : </b>".$_POST['pkrj']. "<br>";
  }
    if(isset($_POST['pb'])){
    echo "<b>Penghasilan Perbulan Ayah : </b>".$_POST['pb']. "<br><br>";
  }
  echo "DATA IBU KANDUNG <br><br>";
      if(isset($_POST['nmi'])){
    echo "<b>Nama Ibu : </b>".$_POST['nmi']. "<br>";
  }
      if(isset($_POST['tli'])){
    echo "<b>Tahun Lahir Ibu : </b>".$_POST['tli']. "<br>";
  }
      if(isset($_POST['pndkn'])){
    echo "<b>Pendidikan Ibu : </b>".$_POST['pndkn']. "<br>";
  }
      if(isset($_POST['pkrjn'])){
    echo "<b>Pekerjaan Ibu : </b>".$_POST['pkrjn']. "<br>";
  }
    if(isset($_POST['pb2'])){
    echo "<b>Penghasilan Perbulan Ibu : </b>".$_POST['pb2']. "<br>";
  }
  ?>
</div>
</section>









  <!-- About -->
  <section class="bg-light page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="foto/html.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>HTML</h4>
                  <h4 class="subheading">(Hypertext Markup language)</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">adalah sebuah bahasa markah yang digunakan untuk membuat sebuah halaman web, menampilkan berbagai informasi didalam sebuah penjelajah web internet dan pemformatan hipeprteks sederhana yang ditulis dalam berkas format ASCII agar dapat menghasilkan tampilan wujud yang terintegerasi.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="foto/css.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>CSS</h4>
                  <h4 class="subheading">(Cascading style sheet)</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam, CSS bukan sebuah bahasa pemograman.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="foto/php.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>PHP</h4>
                  <h4 class="subheading">(Hypertext Preprocesor)</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Merupakan bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML. PHP banyak dipakai untuk memprogram situs web dinamis. PHP juga dapat digunakan untuk membangun sebuah CMS.</p>
                </div>
              </div>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4><br>Cooming soon</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
    <footer class="footer bg-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
      <p class="m-0 text-white">Copyright &copy; First Group.2019</p>
    </div>
    <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Our Teacher : Mr. Fajar Surahman</a>
              <br>
              <a href="#">Other Teacher : Mr. Dimas Pratama</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_kubus?></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_kubus ?>" alt="">
                <ul class="list-inline">
                   <li></li>
            <li>luas: <?=$luas_kubus?></li>
            <li>volume: <?=$volume_kubus?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_balok?></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_balok ?>" alt="">
                <ul class="list-inline">
                   <li></li>
            <li>luas: <?=$luas_balok?></li>
            <li>volume: <?=$volume_balok?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_prisma?></h2>
                <p class="item-intro text-muted">.</p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_prisma ?>" alt="">
                <ul class="list-inline">
                  <li>luas: <?=$luas_prisma?></li>
            <li>volume: <?=$volume_prisma?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_tabung?></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_tabung ?>" alt="">

                <ul class="list-inline">
                 <li>luas: <?=$luas_tabung?></li>
            <li>volume: <?=$volume_tabung?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_limas?></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_limas ?>" alt="">
                <ul class="list-inline">
                  <li>luas: <?=$luas_limas?></li>
            <li>volume: <?=$volume_limas?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?=$nama_kerucut?></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="<?= $gif_kerucut ?>" alt="">
                <ul class="list-inline">
                   <li>luas: <?=$luas_kerucut?></li>
            <li>volume: <?=$volume_kerucut?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
