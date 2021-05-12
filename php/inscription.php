<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

if(!empty($_POST["pseudo"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"])) {
    if($_POST["pass"] === $_POST["pass2"]) {
        try {
            $request = $connect->prepare("INSERT INTO utilisateur(pseudo, pass) VALUES(?, ?)");
            $request->execute([
                $_POST["pseudo"],
                password_hash($_POST["pass"], PASSWORD_BCRYPT)
            ]);
            $_SESSION["pseudo"] = $_POST["pseudo"];
            header("Location: ../index.php");
            exit;
        }catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
    else {
    $_SESSION["error"] = "Les mots de passe doivent être identiques.";
    header("Location: ../index.php");
    exit;
    }
} else {
    $_SESSION["error"] = "Tous les champs du formulaire doivent être remplis.";
    header("Location: ../index.php");
    exit;
}