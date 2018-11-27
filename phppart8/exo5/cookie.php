<?php
setcookie("login_name", $_POST['login']);
setcookie("password", $_POST['password']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo5-cookie</title>
    </head>
    <body>
        <?php
        $mod_log = $_POST['login1'];
        $mod_pswd = $_POST['password1'];
        setcookie("login_name", $mod_log);
        setcookie("password", $mod_pswd);
        header("location: user.php");
        ?>
    </body>
</html>