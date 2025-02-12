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
            <h1>Commande N<sup>o</sup> x</h1>
            <div>
                <label for="cmd-etat">État :</label>
                <select id="cmd-etat" data-pg-name="etat">
                    <option value="enAttente">En attente</option>
                    <option value="enCours" selected>En cours</option>
                    <option value="termine">Terminé</option>
                </select>
            </div>
            <h3>Commendé par :</h3>
            <span>jean.tinguely@cpnv.ch</span>
            <h3>Détail de la commande :</h3>
            <span>100 x Carte de visite</span>
        </div>
    </body>
</html>
