
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo6</title>
    </head>
    <body>
        <?php
        if (!isset($_POST['civilities'], $_POST['firstName'], $_POST['lastName'])){
        ?>
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
        <?php
        } else {
            echo $_POST['civilities'].' '.htmlspecialchars($_POST['firstName']).' '.htmlspecialchars($_POST['lastName']).'.';
        }
        ?>
</html>