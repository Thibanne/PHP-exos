<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3-index</title>
    </head>
    <body>
        <form method="post" action="cookie.php">
            <label>Utilisateur: </label></br>
            <input type="text" name="login" required /></br>
            <label>Mot de passe: </label></br>
            <input type="password" name="password" required /></br>
            <input type="submit" value="cookie">
        </form>       
        <?php
        echo $_COOKIE['login_name'].'<br>';
        echo $_COOKIE['password'];
        ?>        
    </body>
</html>