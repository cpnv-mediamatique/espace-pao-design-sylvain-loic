<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Gestion des commandes</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php include("navbar.php"); ?>
        <div class="container">
            <h1>Panier</h1>
            <div class="carte panier">
                <label for="cmd-etat">Etat : </label>
                <select id="cmd-etat">
                    <option value="enAttente">En attente</option>
                    <option value="enCours" selected>En cours</option>
                    <option value="termine">Terminé</option>
                </select>
                <h3>Détaille de la commande :</h3>
                <p>100 x Carte de visite</p>
            </div>
        </div>
    </body>
</html>
