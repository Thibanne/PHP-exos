<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo5-user</title>
    </head>
    <body>             
        <?php
        echo $_COOKIE['login_name'].'<br>';
        echo $_COOKIE['password'].'<br>'
        .'<a href="index.php">Retour</a>';
        ?>
        <br/>
        <a href="cookie_mod.php">
            <input value="Modifier valeurs cookie">
        </a>
    </body>
</html>