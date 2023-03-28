<?php
session_start(); // Permet d'accéder à la session
// Destruction de toutes les variables de session
$_SESSION = [];
// Destruction du cookie de session
// ajout de code....
// Destruction de la session
session_destroy();
// Redirection vers la page de connexion
header('Location: index.php');
exit;
?>