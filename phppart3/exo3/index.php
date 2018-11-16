
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3</title>
    </head>
    <body>
        <?php
            $base = 100;
            $mult = 7;
            for ($base=100; $base>=10 ; $base--){
                echo $base*$mult."<br/>";
            }
        ?>
    </body>
</html>