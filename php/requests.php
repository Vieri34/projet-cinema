<?php
// stocker informations bdd dans des variables
$host="localhost";
$bdd="defiwelcine";
$user="root";
$pass="PRODUCTION34";

$connect = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8", $user, $pass);

// fonction pour récuperer tout les films
function getAllFilms($dbConn) {
    $request = $dbConn->query("SELECT * FROM films");
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// fonction pour récuperer un film
function getFilmById($dbConn, $id) {
    $request = $dbConn->prepare("SELECT * FROM films WHERE id = ?");
    $request->execute(array(
        $id
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// fonction pour récuperer toutes les catégories
function getCategories($dbConn) {
    $request = $dbConn->query("SELECT * FROM genre");
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// fonction pour récuperer une catégorie
function getCategory($dbConn, $id) {
    $request = $dbConn->prepare("SELECT * FROM genre WHERE id = ?");
    $request->execute(array(
        $id
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// fonction pour récuperer touts les films d'une catégorie
function getFilmsByCategory($dbConn, $films) {
    $request = $dbConn->prepare("SELECT * FROM films WHERE genre = ?");
    $request->execute(array(
        $films
    ));
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function registerUser($dbConn, $user, $mail, $pwd)
{
    $request = $dbConn->prepare("INSERT INTO utilisateur(pseudo, mail, pass) VALUES(?, ?, ?)");
        $request->execute([
            strip_tags($user),
            strip_tags($mail), 
            password_hash($pwd, PASSWORD_BCRYPT)
        ]);
}

function getUserByPseudo($dbConn, $pseudo)
{
    $request = $dbConn->prepare("SELECT * FROM utilisateur WHERE pseudo = ?");
    $request->execute(array(
        $pseudo
    ));
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;
}

/* fonction pour rechercher un film
function searchFilm($dbConn, $search) {
    $search = $connect->prepare("SELECT * FROM films WHERE id = ?");
    $search->execute([
        "%".$_POST['search']."%", 
        "%".$_POST['search']."%"
        ]);
    $results = $search->fetchAll(PDO::FETCH_ASSOC);
}
*/