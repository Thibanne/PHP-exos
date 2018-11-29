<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo6</title>
    </head>
    <body>
        <?php
        $nbJours = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo "il y a ".$nbJours." jours durant le mois de février 2016";
        ?>
    </body>
</html>