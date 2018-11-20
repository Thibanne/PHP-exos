
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo4</title>
    </head>
    <body>
        <?php echo (isset($_GET['language']) ? htmlentities($_GET['language']) : "Language introuvable !"); ?>
        <?php echo (isset($_GET['server']) ? htmlentities($_GET['server']) : "Type de serveur introuvable !"); ?>
    </body>
</html>