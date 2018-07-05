<?php

    require 'function.php';

    $bdd = connectionBDD();
    if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateN']) && isset($_POST['password']) && isset($_POST['email'])){
		
		$from = new DateTime($_POST['dateN']);
		$to   = new DateTime('today');
		$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, nom, prenom, dateNaissance,age, sexe, mdp, email, signeAstro, cherche) 
		VALUES(:pseudo, :nom, :prenom, :dateNaissance, :age, :sexe,  :mdp, :email, :signeAstro, :cherche)');
		$req->execute(array(
			'pseudo' => $_POST['pseudo'],
			'nom' => $_POST['nom'],
			'prenom' => $_POST['prenom'],
			'dateNaissance' => $_POST['dateN'],
			'age' => $from->diff($to)->y,
			'sexe' => $_POST['sexe'],
			'mdp' => $_POST['password'],
			'email' => $_POST['email'],
			'signeAstro' => null,
			'cherche' => $_POST['sexesearch']
		));
		header('Location: http://localhost/Meetoo/inscription2.php');
	}
	else
		header('Location: http://localhost/Meetoo/inscription1.php');
?>