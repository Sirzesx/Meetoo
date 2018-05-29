function connectionBDD(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=metoo;charset=utf8', 'root', '');
        return $bdd;
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

function verifPseudo(var ps, var bdd){
        if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])){
            $result = $bdd->query('Select pseudo from utilisateurs where pseudo = ' . $ps);
            if(mysql_num_rows($result)==0)
                return 0;
            else
                return 1;
        }
}