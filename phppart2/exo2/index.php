
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo2</title>
    </head>
    <body>
        <?php
            $isEasy=false;
            if ($isEasy == true){
                echo "C'est facile!!";
            } else {
                echo "C'est difficile !!!";
            }
         ?>
        <br/>
        <?php
            $isEasy=1;
            if ($isEasy === 1){
                echo "C'est facile!!";
            } else {
                echo "C'est difficile !!!";
            }
         ?>
    </body>
</html>