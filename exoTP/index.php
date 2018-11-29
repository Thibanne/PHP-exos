<?php
//Initialisation des mois
$month = (int) (isset($_GET['month']) ? $_GET['month'] : date('m'));
//initialisation des années
$year = (int) (isset($_GET['year']) ? $_GET['year'] : date('Y'));
//ccalcul du nombre de jours dans le mois et année selectionnée
$nbJours = cal_days_in_month(CAL_GREGORIAN, $month, $year);
//initialisation de la date souhaitée
$date = new DateTime('1-2-2018');
//mise en place du format 1=Lundi, 7=Dimanche
$date->format('N');
//Tableaux des mois
$arrayMonths = [
    1 => 'Janvier',
    2 => 'Fevrier',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Decembre'
];
//Initailisation du jour de départ dans le calendrier par rapport au mois et à l'année
$startDay = strftime('%u', strtotime(date($month . '/1/' . $year)));
?>
<!--debut de l'html-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--petit CSS pour faire joli-->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <!--petit titre pour rappel-->
        <title>exoTP</title>
    </head>
    <body>
        <!--Formulaire-->
        <form method="get">
            <!--select année-->
            <select name="year">
                <!--liste déroulante-->
                <?php
                for ($a = 1987; $a <= 2019; $a++) {
                    echo '<option value="' . $a . '">' . $a . '</option>';
                }
                ?>
            </select>
            <!--select mois-->
            <select name="month">
                <!--pour chaque index on affiche son nom-->
                <?php foreach ($arrayMonths as $monthIndex => $monthName) { ?>
                    <option value="<?= $monthIndex; ?>"><?= $monthName; ?> </option>
                    <?php
                }
                ?>
            </select>
            <!--boutton envoie-->
            <input type="submit" value="Générer">
        </form>
        <!--affichage du mois et année selectionnée-->
        <p><?= $arrayMonths[$month] . ' / ' . $year; ?></p><br/>
        <table>
            <!--haut du tableau-->
            <thead>                
                <tr> 
                    <th>Lun</th> 
                    <th>Mar</th> 
                    <th>Mer</th> 
                    <th>Jeu</th> 
                    <th>Ven</th> 
                    <th>Sam</th> 
                    <th>Dim</th> 
                </tr> 
            </thead>
            <!--Corps du tableau-->
            <tbody>                   
                <tr>
                    <!--boucle pour que le tableau commence au lundi mais se décale au 1 du mois demander-->
                    <?php for ($debutCalendar = 1; $debutCalendar < $startDay; $debutCalendar++) { ?>
                        <td></td>
                        <?php
                    }
//                  mise en place des variable pour les emplacement vide
                    $endVide = $debutCalendar;
                    $number = 1;
//                  tout les jours qui sont vide seront remplit par du vide
                    while ($debutCalendar < $nbJours + $endVide) {
                        ?>
                        <!--contenu d'une case du calendrier-->
                        <td class="align"> 
                            <div class="relative"> 
                                <div class="day"><?= $number; ?></div>
                            </div> 
                        </td>
                        <!--modulo faisant en sorte qu'a chaque fois que les case atteigne le dimanche saute une ligne pour revenir au lundi-->
                        <?php if (($debutCalendar % 7) == 0) { ?>
                        <tr></tr>
                        <?php
                    }
//                    incrémentation des boucles
                    $number++;
                    $debutCalendar++;
                }
//                tant que le calendrier n'est pas complet le remplir avec autant de cas vide
                while (($debutCalendar - 1) % 7 !== 0) {
                    ?>
                <td></td>
                <?php
//                incrementation de la boucle
                $debutCalendar++;
            }
            ?>
        </tr> 
    </tbody> 
</table>
</body>
</html>