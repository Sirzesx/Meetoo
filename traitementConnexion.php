<?php

    require 'function.php';

    $bdd = connectionBDD();
    if(isset($_POST['inputPseudo']) && isset($_POST['inputPassword'])){
		$query=$db->prepare('SELECT mdp FROM utilisateurs WHERE pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['inputPseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
		if ($data['mdp'] == $_POST['inputPassword']){
			$_SESSION['pseudo'] = $data['pseudo'];
			header('Location: http://localhost/Meetoo/inscription2.php');
		}
		$query->CloseCursor();
	}
	else
		header('Location: http://localhost/Meetoo/inscription1.php');
?>