<?php 
$email = 'test'; // à sécuriser
$password = 'test';

if (isset($_POST['login-submit'])) {

    if (isset($_POST['email']) && isset($_POST['password'])) {
        try {
// on vérifie que $_POST['email']/l'email existe en base de données 
// si il existe on récupérent toutes les infos de l'utilisateur en question
// on vérifie que le mot de passe de l'utilisateur en BDD correspond à celui du formulaire
            $query = $pdo->query('');
            $user = $query->fetchAll();
            var_dump($users);
    } catch (PDOException $e) {
        $error = "Erreur : {$e->getMessage()} </br>" ;
        echo $error;
    }

        // if ($_POST['email'] == $email && $_POST['password'] == $password) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['message'] = "Welcome you are connected with your email : {$_SESSION['email']}";
                session_write_close();
                header('Location: index.php');
            exit();
            } else {
                $error = 'Invalid email or password';
        }
    // }













}

