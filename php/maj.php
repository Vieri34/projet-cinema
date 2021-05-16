<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

if(!empty($_POST["pseudo"])) {
    try {
        $data = getUserByPseudo($connect, $_POST["pseudo"]);
        if($data) {
            $_SESSION["error"] = "le pseudo est déjà pris";
            header("Location: ../compte.php");
            exit;
        }
        else {
            updatePseudo($connect, $_POST["pseudo"]);
            $_SESSION["pseudo"] = ($_POST["pseudo"]);
            $_SESSION["error"] = "Votre pseudo a bien été modifié.";
            header("Location: ../compte.php");
            exit;
        }
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
else {
    $_SESSION["error"] = "Le formulaire doit être correctement rempli.";
    header("Location: ../compte.php");
    exit;
}

