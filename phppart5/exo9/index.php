
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo9</title>
    </head>
    <body>
        <?php
            $kitkat = array("02" => "Aisne",
                            "59" => "Nord",
                            "60" => "Oise",
                            "62" => "Pas-de-Calais",
                            "80" => "Somme",
                           );
            foreach ($kitkat as $kitkatshow){
                echo"- ".$kitkatshow."<br />";
            }
        ?>
    </body>
</html>