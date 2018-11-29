<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3</title>
    </head>
    <body>
        <?php
        $dateb = date("Y-m-d");
        setlocale(LC_TIME, "fr_FR", "French");
        $date = strftime("%A %d %B %G", strtotime($dateb));
        $heure = date("H:i");
        echo "Nous sommes le " . $date . " et il est " . $heure;
        ?>
    </body>
</html>