
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo10</title>
    </head>
    <body>
        <?php
            $kitkat = array("02" => "Aisne",
                            "59" => "Nord",
                            "60" => "Oise",
                            "62" => "Pas-de-Calais",
                            "80" => "Somme",
                           );
            foreach ($kitkat as $index=>$kitkatshow){
                echo "Le département ".$kitkatshow." a le numéro ".$index."<br />";
            }
        ?>
    </body>
</html>