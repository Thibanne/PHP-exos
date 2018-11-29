<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo5</title>
    </head>
    <body>
        <?php
        $date1 = ('now');
        $date2 = ('2016-05-16');
        $nbJours = intval((strtotime($date1) - strtotime($date2)) / ((60 * 60) * 24));
        echo "La différence est de " . $nbJours;
        ?>
    </body>
</html>