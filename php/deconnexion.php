<!-- Script servant à terminer la session d'un utilisateur (déconnexion) -->
<?php
session_start();
require __DIR__ . "/requests.php";
$_SESSION = array();

session_destroy();
header("Location: ../index.php");
exit;