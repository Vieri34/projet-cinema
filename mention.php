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
		<link href="css/mention.css" rel="stylesheet" media="all" type="text/css">
	</head>

	<body>
		<!-- header -->
		<?php
			include "./php/header.php";
		?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Mention legale</h2>
                <p>Le site « www.Downtownfilm.com » est édité par Downtownfilm Services</p>
                    <p>Coordonnées:</p>            
                <p>Contacter le service client Downtownfilm :  Email: pour toute demande par Email notre formulaire de contact est accessible ici: Aide / Contact • Téléphone 0 809 103 103 (prix d’un appel local) du lundi au samedi 10h-12h et 14h-18h Downtownfilm
                    Services SNC 2, rue Lamennais 75008 Paris France Contact administratif : 01 71 72 30 90 (ne traite pas les demandes clients) Délégué à la protection des données : dpo@downtownfilm.com</p>
               Informations légales
                <p>Downtownfilm Services, Société en Nom Collectif au capital de 203 008 €, immatriculée 392 706 412 RCS Paris et dont le siège social sis au 2, rue Lamennais, 75008 Paris, France. Numéro de TVA intra-communautaire : FR 25 392 706 412 Hébergeur
                    : Amazon Web Services (centre de données en France) et Salesforce (centre de données en Union Européenne)</p>
              
                <h2>Directeur Publication</h2>
                <p>mathieu Bosc Conditions générales d'utilisation du site à mai 2021</p>
            </div>
        </div>
    </div>

</body>

</html>