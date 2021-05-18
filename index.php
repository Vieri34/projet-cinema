<?php
session_start();
require __DIR__ . "/php/requests.php";
$films = getAllFilms($connect);
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Downtown Film est un site de critiques de films">
		<link rel="icon" type="image/x-icon" href="images/new-logo-icon.png">
		<title><?php echo $df; ?> | Répertoire, avis et critiques de films</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
		<link href="./css/base.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/nav.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/index.css" rel="stylesheet" media="all" type="text/css">
	</head>

	<body>
		<!-- header -->
		<?php
		include "./php/header.php";
		?>
		<!-- main -->
		<main id="index-main">
			<!--hero section-->
			<section id="hero">
					<img id="logo" src="./images/new-logo-resize.png" alt="logo DowntownFilm">
					<img id="building" src="./images/hero-img.png" alt="buildings">
			</section>
			<!-- container z-index 1 -->
			<div id="page">
				<!-- text -->
				<section id="txt-index">
						<h1 id="main-title"><?php echo $df; ?></h1>
						<h3 id="subtitle">Répertoire, avis et critiques de films</h3>
						<p id="main-txt">Retrouvez sur DownTown Film un répertoire des films à l'affiche, des grands classiques, ou films internationaux en tout genre.<br>
						Mettez vos films préférés en favoris, et donnez votre avis en laissant un commentaire ou notant chaque film sur DownTown Film.
						</p>
				</section>
				<!-- carousel -->
				<section id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<figure class="carousel-item active">
						<img class="d-block w-100" src="images/slider-1.png" alt="First slide">
						</figure>
						<figure class="carousel-item">
						<img class="d-block w-100" src="images/slider-2.png" alt="Second slide">
						</figure>
						<figure class="carousel-item">
						<img class="d-block w-100" src="images/slider-3.png" alt="Third slide">
						</figure>
					</div>
					<div id="slide-txt">
						<h2>Tout les films répertoriés sur DownTown Film</h2>
						<p>Accédez au répertoire le plus complet de tout le web !</p>
						<a href="./films.php" class="slide-btn">Plus de films</a>
					</div>
				</section>
				<!--films-->
				<section id="films">
					<h3 class="title-index">Les derniers films sur DownTown Film</h3>
					<div>
						<?php
						foreach ($films as $film) {
							echo "<figure>";
							echo "<a href='./film.php?numero=".$film['id']."'><img src='".$film['image']."' alt='...'></a>";
							echo "<figcaption><a href='./film.php?numero=".$film['id']."'>".$film['titre']."'</a></figcaption>";
							echo "</figure>";
						}
						?>
					</div>
				</section>
				<!-- catégories -->
				<section id="category-wrapper">
				<h3 class="title-index">Catégories</h3>
					<figure><a href="categories.php?numero=1"><img src="images/john-wick.jpg" alt="Action"></a>
						<figcaption><a href="categories.php?numero=1">Action</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=2"><img src="images/jumanji4.jpg" alt="Aventure"></a>
						<figcaption><a href="categories.php?numero=2">Aventure</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=3"><img src="images/space-jam-2.jpg" alt="Comédie"></a>
						<figcaption><a href="categories.php?numero=3">Comédie</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=4"><img src="images/l-incroyable-documentaire-animalier.jpg" alt="Documentaire"></a>
						<figcaption><a href="categories.php?numero=4">Documentaire</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=5"><img src="images/guerre-des-mondes.jpg" alt="Drame"></a>
						<figcaption><a href="categories.php?numero=5">Drame</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=6"><img src="images/harry-potter.jpg" alt="Fantastique"></a>
						<figcaption><a href="categories.php?numero=6">Fantastique</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=7"><img src="images/titanic.jpg" alt="Romance"></a>
						<figcaption><a href="categories.php?numero=7">Romance</a></figcaption>
					</figure>
					<figure><a href="categories.php?numero=8"><img src="images/3283826.jpg" alt="Science-Fiction"></a>
						<figcaption><a href="categories.php?numero=8">Science-Fiction</a></figcaption>
					</figure>
				</section>
			</div>
		</main>
		<!-- footer -->
		<?php
		include "./php/footer.php";
		?>
		<!--scripts-->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="./js/script.js"></script>
	</body>
</html>