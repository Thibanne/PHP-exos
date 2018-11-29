<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo4</title>
    </head>
    <body>
        <?php
        $date = time();
        echo 'Le '.date('d/m/Y', $date).' &agrave; '.date('H:i:s', $date);
        ?>
    </body>
</html>