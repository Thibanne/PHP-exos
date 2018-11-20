
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo2</title>
    </head>
    <body>
        <?php echo (isset($_GET['age']) ? htmlentities($_GET['age']) : "L'age n'est pas défini"); ?>
    </body>
</html>