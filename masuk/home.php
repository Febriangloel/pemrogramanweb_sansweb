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
				<li class="active"><a href="home.php">BERANDA</a></li>
				<li><a href="service.php">LAYANAN</a></li>
				<li><a href="about.php">TENTANG</a></li>
				<li><a href="keluar.php">KELUAR</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>SELAMAT DATANG, ISTIRAHATLAH SEJENAK...</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>Rileks Ya</h3>
				<p>
					Terkadang lebih baik santai sejenak sebelum bertindak.
Hidup ini tidak seserius yang dikira oleh pikiran.
Makin santai kamu memikirkannya, makin baik kamu melakukannya.
Sangat menyenangkan menemukan tempat di mana kamu bisa tenang dan bersantai.
				</p>
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