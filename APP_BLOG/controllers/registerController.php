<?php


if (isset($_POST['register-submit'])) {


    if (isset($_POST['name']) && 
        isset($_POST['email']) && 
        isset($_POST['password'])) {

        // on vérifie la validité des données entrées par l'utilisateur

        $userName = $_POST['name'];
        $emailName = $_POST['email'];
        $passwordName = $_POST['password'];

        try {
            $query = $pdo->prepare(
                'INSERT INTO users(name, email, password) 
                VALUES (:name, :email, :password)');
            // ajoute toutes les informations dans la table users 
            $query->execute([
                'name' => $userName,
                'email' => $emailName,
                'password' => $passwordName
            ]);
            header('Location: index.php?action=afficherListe');

        } catch (PDOException $e) {
            $error = "Erreur : {$e->getMessage()} </br>";
            echo $error;
        }

    }
}

?>