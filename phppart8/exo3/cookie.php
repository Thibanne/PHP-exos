<?php
setcookie("login_name", $_POST['login']);
setcookie("password", $_POST['password']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3-cookie</title>
    </head>
    <body>
        <?php
        header("location: index.php");
        ?>
    </body>
</html>