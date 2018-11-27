
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>exo8</title>
    </head>
    <body>
        <?php
        if (!isset($_GET['civilities'], $_GET['firstName'], $_GET['lastName'])) {
            ?>
            <form method="GET" action="index.php" enctype="multipart/form-data">
                <label for="firstName">Civilité</label>
                <select name="civilities" id="civilities">
                    <option value="Mr">Mr.</option>
                    <option value="Mme">Mme</option>
                </select><br/>
                <label for="firstName">Prénom:</label><br/>
                <input id="firstName" type="text" name="firstName" required /><br/>
                <label for="lastName">Nom:</label><br/>
                <input id="lastName" type="text" name="lastName" required /><br/>
                <label for="fileToUpload">Fichier:</label><br/>
                <input type="file" name="fileToUpload" id="fileToUpload" required /><br/>
                <input type="submit" value="Envoyer" />
            </form>
            <?php
        } else {
            $ext_valide = array('pdf');
            $ext_upload = strtolower(substr(strrchr($_GET['fileToUpload'], '.'), 1));
            if (!in_array($ext_upload, $ext_valide)) {
                echo 'ce n\'est pas un ficher .pdf valide';
            } else {
                echo $_GET['civilities'] . ' ' . htmlspecialchars($_GET['firstName']) . ' ' . htmlspecialchars($_GET['lastName']) . ' ' . ($_GET['fileToUpload']);
            }
        }
        ?>
    </body>
</html>