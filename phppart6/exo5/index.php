
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo5</title>
    </head>
    <body>
        <?php echo (isset($_GET['week']) ? htmlentities ($_GET['week']) : "Semaine inexistante !"); ?>
    </body>
</html>