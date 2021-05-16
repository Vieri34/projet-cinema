<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

if(!empty($_POST["pseudo"]) && !empty($_POST["mail"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"])) {
    if($_POST["pass"] === $_POST["pass2"]) {
        try {
            registerUser($connect, $_POST["pseudo"], $_POST["mail"], $_POST["pass"]);
            $_SESSION["pseudo"] = strip_tags($_POST["pseudo"]);
            $_SESSION["mail"] = strip_tags($_POST["mail"]);
            header("Location: ../index.php");
            exit;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
    else {
    $_SESSION["error"] = "Les mots de passe doivent être identiques.";
    header("Location: ../index.php");
    exit;
    }
}
else {
    $_SESSION["error"] = "Tous les champs du formulaire doivent être remplis.";
    header("Location: ../index.php");
    exit;
}