<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo2-session</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['age'])) {
            echo 'Nom: '.$_SESSION['lastname'].'<br/>'.'Prénom: '.$_SESSION['firstname'].'<br/>'.'Age: '.$_SESSION['age'].' ans .'.'<br>'.'<a href="index.php">Retour</a>';
        } else {
            echo 'Variables non définie'.'<br>'.'<a href="index.php">Retour</a>';
        }
        ?>
    </body>
</html>