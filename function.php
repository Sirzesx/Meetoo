<?php

if(isset($_POST['functionName'])){
	if($_POST['functionName'] == 'verifPseudo'){
		$bdd = connectionBDD();
		verifPseudo($_POST['ps'], $bdd);
	}
}
function connectionBDD(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=metoo;charset=utf8', 'root', '');
        return $bdd;
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

function verifPseudo($ps,$bdd){
		$result = $bdd->prepare('Select COUNT(*) from utilisateurs where pseudo = ' . $ps);
		$result->execute(); 
		if($result->fetchColumn() > 0)
			 echo "<span class='status-not-dispo'> Pseudo indisponible.</span>";
		else
			 echo "<span class='status-dispo'> Pseudo disponible.</span>";
}
?>