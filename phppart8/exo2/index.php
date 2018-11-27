<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo2-index</title>
    </head>
    <body>
        <?php
        $_SESSION['lastname'] = "ANNE";
        $_SESSION['firstname'] = "Thibault";
        $_SESSION['age'] = 30;
        echo '<a href="session.php">Affichage session</a>';
        ?>
    </body>
</html>