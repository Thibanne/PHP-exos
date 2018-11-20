
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3</title>
    </head>
    <body>
        <?php echo (isset($_GET['startDate']) ? htmlentities($_GET['startDate']) : "Date de début non défini"); ?>
        <?php echo (isset($_GET['endDate']) ? htmlentities($_GET['endDate']) : "Date de fin non défini"); ?>
    </body>
</html>