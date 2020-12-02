<!DOCTYPE html>
<html>
<head>
	<title>ROBOT CUP</title>
	<link rel="stylesheet" type="text/css" href="weeb.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">ROBOT CUP</h1>
		<h3 class="deskripsi">Selamat Datang di Website ROBOT CUP</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="awal.php?page=home">HOME</a></li>
			<li><a href="awal.php?page=about">TENTANG</a></li>
			<li><a href="awal.php?page=pendaftaran">PENDAFTARAN</a></li>
            <li><a href="awal.php?page=daftarpeserta">DAFTAR PESERTA</a></li>
			<li><a href="awal.php?page=daftarlomba">DAFTAR PERLOMBAAN</a></li>
			<li><a href="awal.php?page=statuspembayaran">STATUS PEMBAYARAN</a></li>
			<li><a href="awal.php?page=pencarian">PENCARIAN</a></li>
			<li><a href="awal.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php
	include_once("config.php"); 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'about':
				include "about.php";
				break;
			case 'pendaftaran':
				include "pendaftaran.php";
                break;			
            case 'daftarpeserta':
                include "daftarpeserta.php";
				break;
			case 'daftarlomba':
				include "daftarlomba.php";
				break;
			case 'statuspembayaran':
				include "statuspembayaran.php";
				break;
				case 'pencarian':
					include "pencarian.php";
					break;	
					case 'logout':
						include "logout.php";
						break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>