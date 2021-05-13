<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

$uploadDir = "../images/" ;
$targetFile = $uploadDir . basename($_FILES['image']['name']);


if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
    echo "Le fichier est valide et a été téléchargé avec succès.";
}

try {
    $request = $connect->prepare("INSERT INTO films VALUES(NULL,?,?,?,?,?,?,?,?)");
    $request->execute([
        $_POST["titre"],
        $_POST["date_sortie"],
        $_POST["duree"],
        $_POST["realisateur"],
        $_POST["acteurs"],
        $_POST["genre"],
        $_POST["synopsis"],
        $targetFile
        ]);
        print "Le film a bien été enregistré ! <a href='../film_saisie_form.php'>Cliquer pour saisir un autre film</a>";
        exit;
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}

/*
try {
    $req = $connect->prepare("INSERT INTO films VALUES (?,?,?,?,?,?,?,?)");
    if($req->execute([
        $_POST['titre'], 
        $_POST['date_sortie'], 
        $_POST['duree'], 
        $_POST['realisateur'], 
        $_POST['acteurs'], 
        $_POST['genre'], 
        $_POST['synopsis'], 
        $targetFile
    ]));
    //$data = $request->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

    $uploaddir = "img/" ;
    $targetFile = $uploaddir . basename($_FILES['image']['name'][0]);

    try {
        //$dbh = new PDO('mysql:host=localhost;dbname=films', "root", "root");
         $dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pass);        

        $request = $dbh->prepare("INSERT INTO films VALUES(NULL,?,?,?,?,?,?,?,?)");
        $request->execute([
            $_POST["titre"],$_POST["date_sortie"],$_POST["duree"],$_POST["auteur"],$_POST["acteurs"],$_POST["genre"],$_POST["synopsys"],$targetFile]);
         
       print "film enregistre<a href='film_saisie.php'>Saisie autre film</a>";
        exit;
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

*/ 

