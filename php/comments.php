<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

/*
if(!empty($_SESSION["pseudo"]) {
    try {
        writeComment($connect, $_POST["commentaire"]);
        $_SESSION["commentaire"] = strip_tags($_POST["commentaire"]);
        exit;
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }  
}
else {
    $_SESSION["error"] = "Vous devez être inscrit pour pouvoir commenter.";
    exit;
}
*/

try {
    writeComment($connect, $_POST["commentaire"]);
    $_SESSION["commentaire"] = strip_tags($_POST["commentaire"]);
    header("Location: ../film.php");
    exit;
}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}