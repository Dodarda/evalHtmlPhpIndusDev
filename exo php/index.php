<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    </head>
    <body>
        <!-- formulaire de connexion -->
        <form action="connexionbdd.php" method="post">
            <input class="input" type="text" name="idCompte" placeholder="Identifiant">
            <input class="input" type="password" name="mdp" placeholder="Mot de passe">
            <button class="button is-primary" type="submit">Me connecter</button>
        </form>
        </br>
        <!-- formulaire de d'inscription -->
        <form action="inscriptionbdd.php" method="post">
            <input class="input" type="text" name="idCompteInscri" placeholder="Identifiant">
            <input class="input" type="password" name="mdpInscri" placeholder="Mot de passe">
            <button class="button is-primary" type="submit">M'inscrire</button>
        </form>
    </body>
</html>