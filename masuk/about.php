<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SANS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="home.php">SANS</a></h1>
			<ul>
				<li><a href="home.php">BERANDA</a></li>
				<li><a href="service.php">LAYANAN</a></li>
				<li class="active"><a href="about.php">TENTANG</a></li>
				<li><a href="keluar.php">KELUAR</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / About</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<img src="img/banner.jpg" width="100%">
			<h3>Kelompok Pemrograman Web Kelas E</h3>
			<p>
				MERCYANA GRACIA BADOA - 20021106008<br>
				RIZCHY MARK CHRISTIAN SIMBOLON - 20021106099<br>
				GABRILIA NATALIA MENDE - 20021106130<br>
				FEBRIAN GLORIO LALAMENTIK - 20021106164<br>
			</p>
			<h3>Dosen</h3>
			<p>
				ALWIN MELKIE SAMBUL ST, M.Eng, Ph.D
				<br>197709292005011005
			</p>
			<h3>UAS - Final Project
			</h3>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Kelompok Pemrograman Web &copy; 2020 - TIK2032E.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>