
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo3</title>
    </head>
    <body>
        <?php
            $age = 15;
            $genre = "Femme";
            if ($age >= 18 AND $genre == "Homme" ){
                echo "Vous êtes un Homme et vous êtes majeur";
            } elseif ($age >=18 AND $genre == "Femme" ){
                echo "Vous êtes une femme et vous êtes majeur";
            } elseif ($age < 18 AND $genre == "Homme"){
                echo "Vous êtes un homme et vous êtes mineur";
            } elseif ($age < 18 AND $genre == "Femme"){
                echo "Vous êtes une femme et vous êtes mineur";
            }
        ?>
    </body>
</html>