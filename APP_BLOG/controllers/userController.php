<?php 
include 'config/connection.php';

try {
    $query = $pdo->query('SELECT * FROM users');
    // selectionne toutes les informations dans la table users 
    $users = $query->fetchAll(); 
    
    
} catch (PDOException $e) {
    $error = "Erreur : {$e->getMessage()} </br>";
    echo $error;
}

    // var_dump($users);
?>
