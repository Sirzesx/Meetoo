<?php

    require 'function.php';

    $bdd = connectionBDD();
    
    $bdd->prepare('INSERT INTO utilisateurs(pseudo, nom, prenom, dateNaissance, age, sexe, mdp, email) 
    VALUES(:pseudo, :nom, :prenom, :dateNaissance, :age, :sexe, :mdp, :email)');
    $bdd->execute(array(
        'pseudo' => $_POST['pseudo'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'dateNaissance' => $_POST['dateNaissance'],
        'age' => $_POST['age'],
        'sexe' => $_POST['sexe'],
        'mdp' => $_POST['mdp'],
        'email' => $_POST['email']
    ));

    $reponse = $bdd->query('SELECT * FROM utilisateurs');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['pseudo'] . '<br />';
        echo $donnees['nom'] . '<br />';
        echo $donnees['prenom'] . '<br />';
        echo $donnees['dateNaissance'] . '<br />';
        echo $donnees['age'] . '<br />';
        echo $donnees['sexe'] . '<br />';
        echo $donnees['mdp'] . '<br />';
        echo $donnees['email'] . '<br />';
    }
    $reponse->closeCursor();
?>