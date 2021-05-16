<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

try {
    $request = $connect->prepare("DELETE FROM utilisateur WHERE pseudo=?");
    $request->execute([
        $_SESSION["pseudo"]
    ]);
    header("Location: ./deconnexion.php");
    exit;
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}