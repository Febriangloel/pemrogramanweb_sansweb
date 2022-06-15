<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/meditation.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <title>SANS</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/peace.css" />
    <link rel="stylesheet" href="css/nav.css" />
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
  
    <div class="input">
      <label>Pilih Berapa Kali</label>
      <select class="breath-input">
        <option value="3">3 Kali</option>
        <option value="5">5 Kali</option>
        <option value="7">7 Kali</option>
      </select>
    </div>
    <div class="circle-wrap">
      <div class="circle-outline"></div>
      <div class="circle-progress"></div>
    </div>
    <p class="breaths">Sisa berapa kali: <span class="breaths-text">3</span></p>
    <p class="instructions">Apa kamu sudah siap?</p>
    <button class="start">Mulai</button>
    <script src="js/meditation.js"></script>
    <div class="gaboy">
      <p>
        
        
      </p>
    </div>
  </body>
</html>
