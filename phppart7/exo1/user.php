
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo1-user</title>
    </head>
    <body>
        <p>Votre prénom est 
        <?php echo (isset($_GET['firstName']) ? htmlentities(htmlspecialchars($_GET['firstName'])) : "Prénom introuvable"); ?>
        et votre nom est 
        <?php echo (isset($_GET['lastName']) ? htmlentities(htmlspecialchars($_GET['lastName'])) : "Nom introuvable"); ?>
        !!</p>
    </body>
</html>