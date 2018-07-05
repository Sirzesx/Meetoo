<?php

    require 'function.php';

    $bdd = connectionBDD();
    if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateN']) && isset($_POST['password']) && isset($_POST['email'])){
		$birth = $_POST['dateN'];
		//explode the date to get month, day and year
		$birthDate = explode("/", $birthDate);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
		? ((date("Y") - $birthDate[2]) - 1)
		: (date("Y") - $birthDate[2]));
		
		$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, nom, prenom, dateNaissance,age, sexe, mdp, email) 
		VALUES(:pseudo, :nom, :prenom, :dateNaissance, :age, :sexe,  :mdp, :email)');
		$req->execute(array(
			'pseudo' => $_POST['pseudo'],
			'nom' => $_POST['nom'],
			'prenom' => $_POST['prenom'],
			'dateNaissance' => $_POST['dateN'],
			'age' => $age,
			'sexe' => null,
			'mdp' => $_POST['password'],
			'email' => $_POST['email']
		));
		header('Location: http://localhost/Meetoo/inscription2.php');
	}
	else
		header('Location: http://localhost/Meetoo/inscription1.php');
?>