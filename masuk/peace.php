<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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


    <div class="container2">
    <audio id="player" src="mp3/peace.mp3"></audio>
    <div class="player">
      <div class="control">
        <i class="fas fa-play" id="playbtn"></i>
      </div>
      <div class="info">
        Sound of Peace
        <div class="bar">
          <div id="progress"></div>
        </div>
      </div>

      <div id="current">0:00</div>
    </div>
    </div>

    <script src="js/peace.js"></script>
  </body>
</html>