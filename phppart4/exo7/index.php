
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo7</title>
    </head>
    <body>        
        <?php
            function adna($age, $gender){
                if ($age >= 18 AND $gender == "homme" ){
                    print "Vous êtes un homme et vous êtes majeur";
                }elseif ($age >=18 AND $gender == "femme" ){
                    print "Vous êtes une femme et vous êtes majeure";
                }elseif ($age < 18 AND $gender == "homme"){
                    print "Vous êtes un homme et vous êtes mineur";
                }elseif ($age < 18 AND $gender == "femme"){
                    print "Vous êtes une femme et vous êtes mineure";
                }
            }
            adna(15, "femme");
        ?>
    </body>
</html>