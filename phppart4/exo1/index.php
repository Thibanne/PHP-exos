
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo1</title>
    </head>
    <body>
        <?php
            $var1=0;
            $var2=1;
            function yes($var1, $var2){
                if ($var1 < $var2){
                    echo "true";
                }else{
                    echo "false";
                }
            }
            yes($var1, $var2);
        ?>
    </body>
</html>