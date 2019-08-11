<html>
<head>
	<title>TUGAS PWPB</title>
	
	<style type="text/css">
		*{
			margin: 0;
		}
		ul{
	    list-style-type: none;
	    margin: 0px; 
	    padding: 0px;
	    background-color: #a9a9a9;
	    overflow: hidden;
	    box-shadow: 0px 10px;
	    color: #dcdcdc;
    }
    nav{
	    width: 100%;
	    height: auto;
	    border-top: 1px solid;
	    border-bottom: 1px solid;
	    position: sticky;
	    top: 0;
    }
    li a{
	    text-decoration: none;
	    display: block;
	    color: black;
    }
     a{
	    text-decoration: none;
	    display: block;
        color: black;
	    padding: 20px 20px;
	    float: right;
    }
    nav ul li a:hover,
    nav ul li a.active{
	   background: #dcdcdc;
}
    h3{
    	float: left;
    }
    .header{
    	text-align: center;
    	padding-top: 30px;
    }
.konten{
		width: 98%;
		height: auto;
		padding: 30px 0;
	}
	.product-desc{
		width: 30%;
		margin-left: auto;
		margin-right: auto;
		float: right;
	}
	.price{
		display: inline-block;
		border: 1px solid;
		padding: 0 10px;
	}
	.produk{
		text-align: center;
	}
	  img{
    	border-radius: 50% 50%;
    	display: block;
    	width: 200px; 
    	padding: 20px;
    }
    h1{
    	float: center;
    }
    h5{
    	float: center;
    }
    .footer{
    	text-align: center;
    	padding-top: 500px;
    }
    hr{
    	padding-top: 10px
    }
    p{
    	float: left;
    }
	</style>
</head>
<body>
	<!--header-->
	<nav>
		<ul>
		<li><h3><a class="brand" href="#">TUGAS PEMROGRAMAN WEB PERANGKAT BERGERAK</a></h3></li>
		<li><a href="pwpb.php" >BERANDA</a></li>
		<li><a href="#">Tugas keempat</a></li>
        <li><a href="#">Tugas Ketiga</a></li>
        <li><a href="#">Tugas Kedua</a></li>
        <li><a href="#" class="active">Tugas Pertama</a></li>
	</ul>
</nav>
	<!--konten-->

	<?php
	$nama_hardi = "Hardiansyah Tri Syahputra";
	$umur_hardi = 16;
	$tinggi_hardi = 168;

	$nama_ragillah = "Ragillah Syah Pratama";
	$umur_ragillah = 16;
	$tinggi_ragillah = 172;

	$nama_tiara = "Tiara Agustina";
	$umur_tiara = 16;
	$tinggi_tiara = 157;

	$rata_rata = ($tinggi_hardi +  $tinggi_ragillah + $tinggi_tiara)/3;3
	?>
	<div class="header">
		<h1>PERKENALAN DARI KAMI</h1>
		<h5>kelompok 1</h5>
	</div>
	<div class="konten">
		<div class="product-desc">
			<img src="pwpb/hardi.jpg">
			<?php
	echo "Nama : $nama_hardi<br>";
	echo "Umur : $umur_hardi tahun <br>";		  
	echo "Tinggi : $tinggi_hardi cm";		
	?>n
		</div>
		<div class="product-desc">
		<img src="pwpb/agil.jpg">
			<?php
	echo "Nama : $nama_ragillah<br>";
	echo "Umur : $umur_ragillah tahun <br>";		  
	echo "Tinggi : $tinggi_ragillah cm";		
	?>	
		</div>
		<div class="product-desc">
		<img  src="pwpb/tiara.jpg">
			<?php
	echo "Nama : $nama_tiara<br>";
	echo "Umur : $umur_tiara tahun<br>";		  
	echo "Tinggi : $tinggi_tiara cm";		
	?>
        </div>
</div>
<div class="footer">
	<?php
	echo "Rata-Rata Tinggi: $rata_rata ";
	?>
	<hr align="center" width="100%">
	<p>@kelompok1</p>
</div>
</body>
</html>