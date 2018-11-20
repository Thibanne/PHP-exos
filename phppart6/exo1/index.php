
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo1</title>
    </head>
    <body>
        <?php echo (isset($_GET['firstname']) ? htmlentities($_GET['firstname']) : "Le prénom est introuvable"); ?>
        <?php echo (isset($_GET['lastname'])?htmlentities($_GET['lastname']): "Le nom est introuvable"); ?>
    </body>
</html>