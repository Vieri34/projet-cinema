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
		<title><?php echo $df; ?> | Formulaire de connexion</title>
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
					<h1>Formulaire de connexion</h1>
				</div>
			</section>
			<!-- formulaire de connexion-->
			<section class="form-login">
				<form action="./php/connexion.php" method="post">
					<h2>Se connecter sur DownTown Film</h2>

					<label for="pseudo">Pseudo</label>
					<input type="text" name="pseudo" id="pseudo">

					<label for="pass">Mot de passe</label>
					<input type="password" name="pass" id="pass">
					
                    <button type="submit" class="custom-btn">Valider</button>
				</form>
                <?php
				if(!empty($_SESSION["error"])) {
				echo "<p>".$_SESSION["error"]."</p>";
				}
                ?>
				<!-- accès au formulaire d'inscription-->
				<div id="switch-form">
					<div id="switch-inner">
						<h2>Pas encore de compte ?</h2>
						<a href="./inscription_form.php" class="custom-btn">S'inscrire</a>
					</div>
				</div>
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