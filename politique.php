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
            <p>Dans le cadre de son activité, la société Downtownfilm, dont le siège social est situé au Adresse : 79 Avenue Antoine de Saint-Exupéry, 34200 Sète, est amenée à collecter et à traiter des informations dont certaines sont qualifiées de "données personnelles". 
            Downtownfilm attache une grande importance au respect de la vie privée, et n’utilise que des donnes de manière responsable et confidentielle et dans une finalité précise.</p><br>
             
             <h5><strong>Données personnelles</strong></h5>
            <p>Sur le site web Downtownfilm cine.defiweb34.com, il y a 2 types de données susceptibles d’être recueillies :</p><br>

            <h5><strong> données transmises directement</strong></h5>
            <p>Ces données sont celles que vous nous transmettez directement, via un formulaire de contact ou bien par contact direct par email. Sont obligatoires dans le formulaire de contact le champs  prénom et nom ,  entreprise ou organisation et email.</p><br>
            <h5><strong>es données collectées automatiquement</strong></h5>
            <p>Lors de vos visites, une fois votre consentement donné, nous pouvons recueillir des informations de type « web analytics » relatives à votre navigation, la durée de votre consultation, votre adresse IP, votre type et version de navigateur. La technologie utilisée est le cookie.</p>

               <h5><strong>Utilisation des données</strong></h5>
            <p>Les données que vous nous transmettez directement sont utilisées dans le but de vous re-contacter et/ou dans le cadre de la demande que vous nous faites. Les données « web analytics » sont collectées de forme anonyme (en enregistrant des adresses IP anonymes) par Google Analytics, et nous permettent de mesurer l'audience de notre site web, les consultations et les éventuelles erreurs afin d’améliorer constamment l’expérience des utilisateurs. Ces données sont utilisées par Downtownfilm, responsable du traitement des données, et ne seront jamais cédées à un tiers ni utilisées à d’autres fins que celles détaillées ci-dessus.</p><br>
            <h5><strong>Base légale</strong></h5>
            <p>Les données personnelles ne sont collectées qu’après consentement obligatoire de l’utilisateur. Ce consentement est valablement recueilli (boutons et cases à cocher), libre, clair et sans équivoque.</p><br>

             <h5><strong>Durée de conservation</strong></h5>
            <p>Les données seront sauvegardées durant une durée maximale de 3 ans.</p><br>

            <h5><strong>Cookies</strong></h5>
            <p>Voici la liste des cookies utilisées et leur objectif :</p><br>
            <p>Cookies Google Analytics (liste exhaustive) : Web analytics
            Nom du cookie : Permet de garder en mémoire le fait que vous acceptez les cookies afin de ne plus vous importuner lors de votre prochaine visite.</p><br>

            <h5><strong>Vos droits concernant les données personnelles</strong></h5>
            <p>Vous avez le droit de consultation, demande de modification ou d’effacement sur l’ensemble de vos données personnelles. Vous pouvez également retirer votre consentement au traitement de vos données.</p><br>

             <h5><strong>Contact délégué à la protection des données</strong></h5>
             <i class="far fa-envelope"> mathieudupont@gmail.com</i><br>
             <i class="fas fa-phone-alt"> 04 85 25 24 10 </i>
             
                        
            </div>  
        </div>
    </div>
</body>
</html>