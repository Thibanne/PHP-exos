
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo2-user</title>
    </head>
    <body>
        <p>Votre prénom est 
        <?php echo (isset($_POST['firstName']) ? htmlentities(htmlspecialchars($_POST['firstName'])) : "Prénom introuvable"); ?>
        et votre nom est 
        <?php echo (isset($_POST['lastName']) ? htmlentitieshtmlspecialchars($_POST['lastName']) : "Nom introuvable"); ?>
        !!</p>
    </body>
</html>