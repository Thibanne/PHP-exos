<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo8</title>
    </head>
    <body>
        <?php
        $date_debut = strtotime(time());
        $date_fin = date('Y-m-d', strtotime($date_debut . ' -22 days'));
        echo $date_fin;
        ?>
    </body>
</html>