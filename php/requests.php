<?php
// stocker accès bdd dans variables
$host="localhost";
$bdd="defiwelcine";
$user="root";
$pass="PRODUCTION34";

$connect = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8", $user, $pass);

// nom site
$df = "DownTown Film";

// récuperer tout les films
function getAllFilms($dbConn) {
    $request = $dbConn->query("SELECT * FROM films");
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// récuperer un film
function getFilmById($dbConn, $id) {
    $request = $dbConn->prepare("SELECT * FROM films WHERE id = ?");
    $request->execute(array(
        $id
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// récuperer toutes les catégories
function getCategories($dbConn) {
    $request = $dbConn->query("SELECT * FROM genre");
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// récuperer une catégorie
function getCategory($dbConn, $id) {
    $request = $dbConn->prepare("SELECT * FROM genre WHERE id = ?");
    $request->execute(array(
        $id
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// récuperer tout les films d'une catégorie
function getFilmsByCategory($dbConn, $films) {
    $request = $dbConn->prepare("SELECT * FROM films WHERE genre = ?");
    $request->execute(array(
        $films
    ));
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// insérer les infos d'un utilisateur
function registerUser($dbConn, $user, $mail, $pwd) {
    $request = $dbConn->prepare("INSERT INTO utilisateur(pseudo, mail, pass) VALUES(?, ?, ?)");
    $request->execute([
        strip_tags($user),
        strip_tags($mail), 
        password_hash($pwd, PASSWORD_BCRYPT)
    ]);
}

// récuperer le pseudo d'un utilisateur
function getUserByPseudo($dbConn, $pseudo) {
    $request = $dbConn->prepare("SELECT * FROM utilisateur WHERE pseudo = ?");
    $request->execute(array(
        $pseudo
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// mettre à jour son pseudo
function updatePseudo($dbConn, $pseudo) {
    $request = $dbConn->prepare("UPDATE utilisateur SET pseudo=? WHERE pseudo=?");
    $request->execute([
        strip_tags($_POST["pseudo"]),
        $_SESSION["pseudo"]
    ]);
}

// insérer des commentaires
function writeComment($dbConn, $comment) {
    $request = $dbConn->prepare("INSERT INTO commentaires(commentaire) VALUES(?)");
    $request->execute([
        strip_tags($comment)
    ]);
}
