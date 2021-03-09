<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Connexion</title>
        <link href="connexion.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php include("navbar.php"); ?>
        <h1>Connexion</h1>
        <div class="container">
            <form action="post_login.php" method="post">
                <div class="mail">
                    <label for="mail"> </label>
                    <input type="email" placeholder="email" id="mail" name="user_mail">
                </div>
                <div class="paswrd">
                    <label for="pass"></label>
                    <input type="password" placeholder="password" name="password" minlength="8" required>
                </div>
                <div class="submit">
                    <button class="btn-primary btn" type="submit">Connexion</button>
                </div>
            </form>
        </div>
    </body>
</html>
