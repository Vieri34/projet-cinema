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
		<link rel="icon" type="image/x-icon" href="images/logo-V4-crop.png">
		<title>Downtown Film | Formulaire de saisie de films</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
		<main class="form-login">
			<section>
				<h1 class="titre-main-page">Formulaire de saisie de films</h1>
				    <!--formulaire-->				
                    <form method="post" action="./php/film_saisie.php" enctype="multipart/form-data">
                        <label for="titre">Titre :</label>
                        <input type="text" id="titre" name="titre">

                        <label for="date_sortie">Date de Sortie</label>
                        <input type="date" id="date_sortie" name="date_sortie">

                        <label for="duree">Durée</label>
                        <input type="text" id="duree" name="duree">

                        <label for="realisateur">Réalisateur</label>
                        <input type="text" id="realisateur" name="realisateur">

                        <label for="acteurs">Acteurs</label>
                        <input type="text" id="acteurs" name="acteurs">
                        
                        <label for="genre">Genre</label>
                        <select id="genre" name="genre">
                            <?php
                                foreach ($categories as $category) {
                                    echo "<option value=".$category['genre'].">".$category['genre']."</option>";
                                }
							?>
                        </select>
                        
                        <label for="synopsis">Synopsys</label>
                        <textarea id="synopsis" name="synopsis"></textarea>
                        
                        <label for="image">Image (sans espaces)</label>
                        <input type="file" name="image">

                        <button type="submit">Valider</button>
                    </form>

                <?php
                    if(!empty($_SESSION["error"])) {
                    echo "<p>".$_SESSION["error"]."</p>";
                    }
                ?>
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