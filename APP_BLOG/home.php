<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        echo "La session est désactivé";
    } else {
        // echo "vous etes  connecté !";
        print_r($_SESSION['message']);
    }
    include 'templates/head.php';
    ?>
<body>
        <?php  include 'templates/navbar.php';?>
<div class="container">
    <h1>Il était une fois sur le web </h1>
        <p>
            <?php if(isset($error)): echo $error; else: ?>
                <h2>Bienvenue</h2>
            <?php endif; ?>
        </p>

        <?php include 'templates/forms/formLogin.php'; ?>
        <?php include 'templates/forms/formLogout.php'; ?>

        <?php 
        include 'templates/forms/formCreate.php'; 

        if (isset($_POST['create-submit']) || 
            isset($_POST['delete-submit']) ||  
            isset($_GET['action']) && $_GET['action'] == 'afficherListe') {

            if (function_exists('afficherTableau')) {
                afficherTableau();
            }
        }
        
        include 'templates/lists/listUsers.php';
        ?>
        </div>
</body>
</html>
