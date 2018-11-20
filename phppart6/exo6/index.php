
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo6</title>
    </head>
    <body>
        <?php echo (isset($_GET['building']) ? htmlentities($_GET['building']) : "Batiment introuvable"); ?>
        <?php echo (isset($_GET['room']) ? htmlentities($_GET['room']) : "Salle introuvable"); ?>
    </body>
</html>