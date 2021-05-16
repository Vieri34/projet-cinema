<!-- Script servant à enregistrer en BDD le contenu du formulaire d'inscription -->
<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

if(!empty($_POST["pseudo"]) && !empty($_POST["pass"])) {
    try {
        $data = getUserByPseudo($connect, $_POST["pseudo"]);
        if($data) {
            if(password_verify($_POST["pass"], $data["pass"])) {
                $_SESSION["pseudo"] = strip_tags($_POST["pseudo"]);
                $_SESSION["mail"] = strip_tags($data["mail"]);
                header("Location: ../compte.php");
                exit;
            } else {
                $_SESSION["error"] = "Un des identifiants est incorrect.";
                header("Location: ../connexion_form.php");
                exit;
            }
        } else {
            $_SESSION["error"] = "Un des identifiants est incorrect.";
            header("Location: ../connexion_form.php");
            exit;
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
else {
    $_SESSION["error"] = "Tous les champs du formulaire doivent être remplis.";
    header("Location: ../connexion_form.php");
    exit;
}