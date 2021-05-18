<?php
	session_start();
	require __DIR__ . "../php/requests.php";
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
		<link href="./css/mention.css" rel="stylesheet" media="all" type="text/css">
		<link href="./css/politique.css" rel="stylesheet" media="all" type="text/css">
	</head>

<body>
		<!-- header -->
		<?php
			include "./php/header.php";
		?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="text-center">Politique de confidentialité </h2>
                <p>1. La confidentialité des visiteurs de notre site Web est très importante pour nous et nous nous engageons à la protéger.</p><br>
                <p>Cette politique explique ce que nous faisons de vos informations personnelles.2. Le consentement à notre utilisation des cookies conformément aux termes de cette politique lorsque vous visitez notre site Web pour la première fois nous permet d'utiliser des cookies à chaque fois que vous visitez notre site Web.</p><br>
                <p>2. Informations sur vos visites et votre utilisation de ce site Web, y compris la source de référence, la durée de la visite, les pages vues et les chemins de navigation du site Web.</p>
                <p>3. Les informations que vous saisissez lorsque vous vous inscrivez sur notre site Web, telles que votre site Web de messagerie électronique.</p><br>
                <p>4. Informations que vous saisissez lorsque vous créez un profil sur notre site Web. Par exemple, votre nom, vos photos de profil, votre sexe, votre date de naissance, le statut de votre relation, vos intérêts et vos passe-temps, vos informations relatives à l'éducation et à votre emploi.</p>
                <p>5. Les informations que vous saisissez pour vous abonner à nos e-mails et / ou newsletters.
                Les informations générées lors de l'utilisation de notre site Web, y compris quand, à quelle fréquence et dans quelles circonstances vous l'utilisez.</p>
                <p>6. Les informations générées lors de l'utilisation de notre site Web, y compris quand, à quelle fréquence et dans quelles circonstances vous l'utilisez.</p>
                <p>7. Informations relatives à tout ce que vous achetez, aux services que vous utilisez ou à la transaction que vous effectuez via notre site Web, qui comprend votre nom, adresse, numéro de téléphone, adresse e-mail et détails de carte de crédit.</p><br>
                <p>8. Les informations que vous publiez sur notre site Web dans l'intention de les publier sur Internet.</p><br>
                <p>9. Toute autre information personnelle que vous nous envoyez.</p>
                <p>D. Utilisation des informations personnelles</p>
                <p>Les informations personnelles qui nous sont soumises via notre site Web seront utilisées aux fins spécifiées dans cette politique ou sur les pages pertinentes du site Web. Nous pouvons utiliser vos informations personnelles pour ce qui suit:</p>
            </div>  
        </div>
    </div>
</body>
</html>