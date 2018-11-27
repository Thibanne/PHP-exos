
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo1</title>
    </head>
    <body>
        <?php
        echo 'User agent : '.$_SERVER['HTTP_USER_AGENT'].'.'.'</br>';
        echo 'Adresse IP : '.$_SERVER['REMOTE_ADDR'].'.'.'</br>';
        echo 'Nom du serveur : '.$_SERVER['HTTP_HOST'].'.';
        ?>
    </body>
</html>