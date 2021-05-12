<?php
session_start();
require __DIR__ . "/php/requests.php";
$film = getFilmById($connect, $_GET["numero"]);
if(!$film) {
	header("Location: index.php");
}
?>

<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CinéDéfi est un site de critiques de films">
		<link rel="icon" type="image/x-icon" href="images/avataaars.png">
		<title>Downtown Film | <?php echo $film['titre']?></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
		<link href="./css/base.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/nav.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/page-film.css" rel="stylesheet" media="all" type="text/css">
	</head>

	<body>
		<!--header-->
		<?php
			include "./php/header.php";
		?>
		<!--page-->
		<main>
			<!--films-->
			<section id="page">
				<a href="#"><img src="<?php echo $film['image']?>" alt=" ..."></a>
				<div class="text-film">
					<h2 class="titre-main-page"><?php echo $film['titre']?></h2>
					<div class="staff">
						<h3 class="realisateur">Réalisateur: </h3>
						<div class="container-staff">
							<p><a href="#"><?php echo $film['realisateur']?></a></p>
						</div>
						<h3 class="acteur">Acteurs: </h3>
						<div class="container-staff">
							<p><a href="#"><?php echo $film['acteurs']?></a></p>
						</div>
					</div>
					
					<h3 class="titre-synopsis">Synopsis</h3>
					<p class="synopsis"><?php echo $film['synopsis']?></p>
					<button class="categorie"><?php echo $film['genre']?></button>
				</div>
			</section>

			<section id="comments">
				<h2>Commentaires</h2>
				<div class="notes">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>

				</div>

			</section>
		</main>
		<!--footer-->
		<?php
			include "./php/footer.php";
		?>
		<!--scripts-->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</body>
</html>