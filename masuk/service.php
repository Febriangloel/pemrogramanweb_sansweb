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
				<li class="active"><a href="service.php">LAYANAN</a></li>
				<li><a href="about.php">TENTANG</a></li>
				<li><a href="keluar.php">KELUAR</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Service</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-music"></i></div>
					<h4><a href="peace.php">SUARA KETENANGAN</a></h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-lungs"></i></div>
					<h4><a href="meditation.php">MEDITASI PERNAPASAN</a></h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-message"></i></div>
					<h4><a href="quote.php">PESAN BUAT KAMU</a></h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-smile"></i></div>
					<h4><a href="bahagia.php">TIPS BAHAGIA</a></h4>
				</div>
			</div>
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