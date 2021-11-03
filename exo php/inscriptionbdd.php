<?php 
    $idCompte = $_POST['idCompteInscri'];
	$mdp = $_POST['mdpInscri'];

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$req = $bdd->prepare('INSERT INTO compte (identifiant, mdp) VALUES ("'.$idCompte.'", "'.$mdp.'")');
	$req->execute();
	$req->closeCursor();
?>