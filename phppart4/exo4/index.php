
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo4</title>
    </head>
    <body>
        <?php
            function calc($var1, $var2){
                if ($var1 > $var2){
                    print "Le premier nombre est plus grand";
                } elseif ($var1 == $var2) {
                    print "Les deux nombres sont identiques";
                } else {
                    print "Le premier nombre est plus petit";
                }
            }
            calc(15, 25);
        ?>
    </body>
</html>