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
		<link rel="icon" type="image/x-icon" href="images/new-logo-icon.png">
		<title>Downtown Film | <?php echo $film['titre']?></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
		<link href="css/lightbox.css" rel="stylesheet">
		<link href="./css/base.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/nav.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/film.css" rel="stylesheet" media="all" type="text/css">
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
				<a href="<?php echo $film['image']?>" data-lightbox="img"><img src="<?php echo $film['image']?>" alt=" ..."></a>
				<div class="text-film">

					<h1 class="titre-main-page"><?php echo $film['titre']?></h1>

					<div id="info-film">
						<div class="text-lign">
							<h4 class="realisateur">Film réalisé par:</h4>
							<a href="#"><?php echo $film['realisateur']?></a>
						</div>
						<div class="text-lign">
							<h4 class="acteur">Avec:</h4>
							<a href="#"><?php echo $film['acteurs']?></a>
						</div>
						<div class="text-lign">
							<h4 class="duree">Durée:</h4>
							<a href="#"><?php echo $film['duree']?></a>
						</div>
						<div class="text-lign">
							<h4 class="date">Date de sortie:</h4>
							<a href="#"><?php echo $film['date_sortie']?></a>
						</div>
					</div>
					<div class="synopsis">
						<h3 class="titre-synopsis">Synopsis</h3>
						<p class="text-synopsis"><?php echo $film['synopsis']?></p>
						<a href="#" class="categorie-film custom-btn"><?php echo $film['genre']?></a>
					</div>

				</div>
			</section>

			<section id="comments">
				<h2>Commentaires</h2>
				<!--rating system
				<div class="star-rating">
					<span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
					<input type="hidden" name="whatever3" class="rating-value" value="1">
				</div>
				-->
				<!--commentaires-->
				<div id="com-inner">
					<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
					<textarea rows="5" placeholder="Laissez un commentaire ici..." name="comment" id="comment" required></textarea>
					<button class="custom-btn">Envoyer</button>
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
		<script src="js/lightbox.js"></script>
		<script>
			lightbox.option({
			  'fitImagesInViewport': false,
			})
		</script>
		<script src="js/script.js"></script>
	</body>
</html>