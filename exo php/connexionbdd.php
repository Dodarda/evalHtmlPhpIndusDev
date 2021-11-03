<?php

	$idCompte=$_POST['idCompte'];
	$mdp=$_POST['mdp'];

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('SELECT mdp FROM compte WHERE identifiant = "'.$idCompte.'"');
	$req->execute();
	$mdpbdd = $req->fetch()[0];
	$req->closeCursor();
		
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
