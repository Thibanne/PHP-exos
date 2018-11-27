
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo5</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <label for="firstName">Civilité</label>
            <select name="civilities" id="civilities">
                <option value="Mr">Mr.</option>
                <option value="Mme">Mme</option>
            </select><br/>
            <label for="firstName">Prénom:</label><br/>
            <input id="firstName" type="text" name="firstName" required /><br/>
            <label for="lastName">Nom:</label><br/>
            <input id="lastName" type="text" name="lastName" required /><br/>
            <input type="submit" value="Envoyer" />
        </form>
        <?php echo (isset($_POST['civilities']) ? htmlentities(htmlspecialchars($_POST['civilities'])) : "Civilité introuvable"); ?>
        <?php echo (isset($_POST['firstName']) ? htmlentities(htmlspecialchars($_POST['firstName'])) : "Prénom introuvable"); ?> 
        <?php echo (isset($_POST['lastName']) ? htmlentities(htmlspecialchars($_POST['lastName'])) : "Nom introuvable"); ?>
    </body>
</html>