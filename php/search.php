<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

/*
$search = $connect->prepare("SELECT * FROM films WHERE id = ?");
$search->execute([
    $_POST["search"]
    ]);
$results = $search->fetchAll(PDO::FETCH_ASSOC);

$run = mysqli_query($connect,$search);
$searchNum = mysqli_num_rows($run);

if ($results==0) {
    echo "Aucun résultat trouvé.";
}
else {
    echo "<h1><strong> $searchNum Results Found for \"" .$results."\" </strong></h1>";
}

 */

$searchFilm = getAllFilms($connect);
// Array with names
$a[] = "zzz";

// boulcle pour rechercher id et titres de films
foreach ($searchFilm as $film) {
  //$a[] = $film["titre"];
  array_push($a, [$film["id"], $film["titre"]]);
}

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $film) {
    if (stristr($q, substr($film[1], 0, $len))) {
      if ($hint === "") {
        $hint = "<a href=./film.php?numero=".$film[0].">".$film[1]."</a>";
      } else {
        $hint .= "<br><a href=./film.php?numero=".$film[0].">".$film[1]."</a>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Pas de film trouvé" : $hint;
// ternaire: poser une question avec 2 réponses
// fonctionne comme un if/else

