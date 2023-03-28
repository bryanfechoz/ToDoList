<?php
include 'config/config.php';
// On se connecte à la base de données 
//Les infos de connexion à la BDD
$pdo = new PDO(
    'mysql:host=localhost;
    dbname=Bryan; 
    charset=utf8', 
    DB_USER, //root
    DB_PASSWORD, //""
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
);

?>


