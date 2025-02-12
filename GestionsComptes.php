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
            <h1>Gestion des comptes</h1>
            <div class="carte">
                <h2>jean.tinguely@cpnv.ch</h2>
                <label for="compte-statut">Statut : </label>
                <select id="compte-statut">
                    <option value="eleve">Élève</option>
                    <option value="cbe">Élève CBE</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="admin" selected>Admin</option>
                </select>
            </div>
            <div class="carte">
                <h2>darius.rochebin@cpnv.ch</h2>
                <label for="compte-statut">Statut : </label>
                <select id="compte-statut">
                    <option value="eleve" selected>Élève</option>
                    <option value="cbe">Élève CBE</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>
    </body>
</html>
