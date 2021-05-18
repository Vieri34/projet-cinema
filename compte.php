<?php
session_start();
require __DIR__ . "/php/requests.php";
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CinéDéfi est un site de critiques de films">
		<link rel="icon" type="image/x-icon" href="images/new-logo-icon.png">
		<title><?php echo $df; ?> | Mon compte</title>
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
		<main>
			<!-- banière -->
			<section id="banner">
				<div id="banner-txt">
					<?php
					if(!empty($_SESSION["pseudo"])) {
						echo "<h1>Bonjour ".$_SESSION["pseudo"]."</h1>";
					}
					?>
					<?php
					if(!empty($_SESSION["error"])) {
						echo "<p>Bonjour ".$_SESSION["error"]."</p>";
					}
					?>
				</div>
			</section>
			<!-- page compte perso -->
			<section class="form-login section-account">
				<?php
				if(!empty($_SESSION["pseudo"])) {
					echo "<h2>Bonjour ".$_SESSION["pseudo"]."</h2>";
				}
				?>
				<?php
				if(!empty($_SESSION["error"])) {
					echo "<p>Bonjour ".$_SESSION["error"]."</p>";
				}
				?>
			<!-- formulaire modification du pseudo -->
			<form class="form-account" action="./php/maj.php" method="post">
				<label for="pseudo">Modifier votre pseudo</label>
				<input type="text" id="pseudo" name="pseudo">
				<button type="submit" class="custom-btn">Valider</button>
			</form>
				<!-- bouton de déconnexion -->
				<form class="form-account" action="./php/deconnexion.php" method="post">
					<button type="submit" class="custom-btn">Déconnexion</button>
				</form>
				<!-- bouton de suppression du compte -->
				<form class="form-account" action="./php/suppression.php" method="post">
					<button type="submit" class="custom-btn">Supprimer mon compte</button>
				</form>
				<a href="./film_saisie_form.php">Formulaire de saisie de films</a>
            </section>
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