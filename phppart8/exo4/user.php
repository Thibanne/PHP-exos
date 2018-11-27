<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo4-user</title>
    </head>
    <body>             
        <?php
        echo $_COOKIE['login_name'].'<br>';
        echo $_COOKIE['password'].'<br>'
        .'<a href="index.php">Retour</a>';
        ?>        
    </body>
</html>