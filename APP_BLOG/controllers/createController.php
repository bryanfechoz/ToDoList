<?php //session_start(); // ajouter une condition: login de User
// Logique PHP// Vérifier les inputs du formulaires// si on les valides on les mets dans un tableau // BONUS afficher le tableau dans la page d'accueil ($SESSION) et on meme fait la suppression !

if (isset($_POST['create-submit']) ||
    isset($_POST['delete-submit']) || 
    isset($_POST['afficherListe-submit']) || 
    isset($_GET['action']) && $_GET['action'] == 'afficherListe') {

    function validerInput() {
        if (isset($_POST['input']) && $_POST['input'] != '') {
            return true;
        }
        return false; // envoyer un message d'erreur à l'utilisateur
    }

    function ajouterInfoTableau() {
        if (validerInput()) {
            array_push($_SESSION['tableau'], $_POST['input'] ); // push dans le tableau
        }
    }

    function deleteInfoTableau()  {
            $index = $_POST['delete-submit'];
            unset($_SESSION['tableau'][$index]);
            header('Location: index.php?action=afficherListe');
            // redirige l'utilisateur vers la même page pour mettre à jour la liste
    }


    function afficherTableau() {
        if (!isset($_SESSION['tableau'])) { 
            $_SESSION['tableau'] = [];  
        }

        ajouterInfoTableau();

        if (!empty($_SESSION['tableau'])) { 
            $infos = array_keys($_SESSION['tableau']);
            print_r($_SESSION['tableau']);
            // $infos = [0, 1, 2];
            echo "<h2>Liste d'informations :</h2>";
            echo '<form method="post" action="index.php">';
                echo '<ul>';
                foreach ($infos as $index) {
                    echo '<li>' . htmlspecialchars($_SESSION['tableau'][$index]) . ' <button type="submit" name="delete-submit" value="' . $index. '">Supprimer</button></li>';
                }
                echo '</ul>';
            echo '</form>';
        } else {
            echo "tableau vide";
        }

        if (isset($_POST['delete-submit'])) {
            deleteInfoTableau();
        }
    }
}
?>