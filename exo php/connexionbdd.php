<?php
	// récupération des variables de connexion
	$idCompte=$_POST['idCompte'];
	$mdp=$_POST['mdp'];

	// connexion à la base de donnée
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	// requete 
	$req = $bdd->prepare('SELECT mdp FROM compte WHERE identifiant = "'.$idCompte.'"');
	$req->execute();
	$mdpbdd = $req->fetch()[0];
	$req->closeCursor();
	// vérification entre les identifiants du site et de la BDD + redirection si mauvais mdp 
	if ($mdp == $mdpbdd){
        echo 'c\'est le bon mot de passe';
	}
	else {
			echo 'c\'est le mauvais mot de passe </br>';
            echo '<form action="index.php" method="post">
            <button class="button is-primary" href="index.php" type="submit">Retour</button>
            </form>';
	}
?>
