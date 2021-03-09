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
            <h1>Gestion des commandes</h1>
            <a href="Commande.html" class="btn btn-primary"> <span>Commande N<sup>o</sup> 1</span> <p>État : En attente</p> </a>
            <!-- Boutons pour passer à l’étape suivante de la commande -->
            <button type="button" class="btn btn-cmd btn-secondary">Prendre la commande</button>
            <a href="Commande.html" class="btn btn-primary"> <span>Commande N<sup>o</sup> 2</span> <p>État : En cours de traitement</p> </a>
            <button type="button" class="btn btn-cmd btn-secondary">Terminer la commande</button>
        </div>
    </body>
</html>
