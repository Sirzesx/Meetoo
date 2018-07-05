

<?php /*
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();

  */ 
   ?>
   
   
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/styleCo.css" />
    <link href="bootstrap-glyphicons-master/css/bootstrap.icon-large.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>	
  
  <!-- Include the plugin's CSS and JS: -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"></script>
	
	
	
	<body class="bodyco">

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand -->
		  <a class="navbar-brand" href="Coindex.php"><h2 class="logo">Meetoo</h2></a>
		  
		  <!-- Links -->
			<ul class="navbar-nav">

			  <li class="nav-item">
				<a id="recherche" class="nav-link"  data-toggle="modal" data-target="#myModal">Recherche</a>
			  </li>

			</ul>
			
			
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item" ><a class="nav-link" href="">  Message </a></li>
				<li class="nav-item" ><a class="nav-link" href="">  Liste des Amis </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  <a class="dropdown-item" href="profil.php">Profil</a>
					  <a class="dropdown-item" href="edit_profil.php">Edition Profil</a>
					  <a class="dropdown-item" href="Deconnexion.php">Deconnexion</a>
					</div>
				</li>
			</ul>

		</nav>



		<div class="container">

		    <div class="row">

		        <div class="col-lg-4 pull-lg-8 text-lg-center" style="margin-top: 50px;">
		            <img src="img/coeur.jpg" class="m-x-auto img-fluid img-circle" alt="avatar">
		            <h6 class="m-t-2" style="margin-top: 10px;">#Nom, <i class="fas fa-mars"></i> <i class="fas fa-venus"></i></h6>
		            
		        </div>

		        <div class="col-lg-8 push-lg-4" id="description" style="margin-top: 50px;">
		        	<p> 
		        		<div class="row">
		        			<div class="col">
			        		Age : <span class="align-mid">XXXX</span><hr size=”10″ />
			        		Type de relation recherché :<span class="align-mid">XXXX</span><hr size=”10″ /> 
			        		
			        		Situation Familial :<span class="align-mid">XXXX</span><hr size=”10″ /> 
			        		Pays d'origine :<span class="align-mid">XXXX</span><hr size=”10″ /> 
			        		Niveau de diplôme :<span class="align-mid">XXXX</span><hr size=”10″ />
			        		Nombre d'enfant :<span class="align-mid">XXXX</span><hr size=”10″ /> 
			        		Souhait d'avoir des enfants :<span class="align-mid">XXXX</span><hr size=”10″ /> 
		        			</div>
		        			<div class="col">
		        				Localisation : <span class="align-mid">XXXX</span><hr size=”10″ />
				        		Poids : <span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		Taille :<span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		Type de Cheveux:<span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		Religion :<span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		Fumeur : <span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		Centre d'intéret : <span class="align-mid">XXXX</span><hr size=”10″ /> 
				        		
				        	</div>
				        </div>
				        Description : XXXXXX
		        	</p>
		        </div>

		    </div>
		</div>
				
	</body>
	
		

		<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Option de recherche</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="index.php" method="post">
					<div class="modal-body">
					
						<div class="ROption">
							<label for="sel1">Sexe</label>
							<select class="form-control" id="sel1">
								<option value="0" selected="selected">Default</option>
								<option value="1" >Homme</option>
								<option value="2" >Femme</option>
							</select>
						</div>
						
						<div class="ROption">
							<label for="sel2">Age</label>
							<select class="form-control" id="sel2">
								<option value="0" selected="selected">Default</option>
								<option value="1" >18-25ans</option>
								<option value="2" >25-35ans</option>
								<option value="3" >35-50ans</option>
								<option value="4" >+ de 50ans</option>
							</select>
						</div>
						
						<div class="ROption">
							<label for="sel3">Signe Astrologique</label>
							<select class="form-control" id="sel3">
								<option value="0" selected="selected">Default</option>
								<option value="1" >Belier</option>
								<option value="2" >Taureau</option>
								<option value="3" >Gesmeaux</option>
								<option value="4" >Cancer</option>
								<option value="5" >Lion</option>
								<option value="6" >Vierge</option>
								<option value="7" >Balance</option>
								<option value="8" >Scorpion</option>
								<option value="9" >Saggittaire</option>
								<option value="10" >Capricorne</option>
								<option value="11" >Verseau</option>
								<option value="12" >Poisson</option>
								
							</select>
						</div>
						
						<div class="ROption">
							<label for="sel4">Type de relations</label>
							<select class="form-control" id="sel4">
								<option value="0" selected="selected">Default</option>
								<option value="1" >Serieux</option>
								<option value="2" >Sans Engagement</option>
								<option value="3" >Ami</option>
							</select>
						</div>
						
						
						<div class="ROption">
							<label for="sel5">Centre d'interets</label>
							<select class="form-control" id="sel5" multiple="multiple">
								<option value="0" selected="selected">Default</option>
								<option value="1" >Informatique</option>
								<option value="2" >Musique</option>
								<option value="3" >Arts</option>
								<option value="4" >Sports</option>
								<option value="5" >Cuisine</option>
								<option value="6" >Electronique</option>
								<option value="7" >Jeux Video</option>
								<option value="8" >Photographie</option>
								<option value="9" >Couture</option>
								<option value="10" >Bricolage</option>
								<option value="11" >Jardinage</option>
								<option value="12" >Lecture</option>
								<option value="13" >Serie/Film</option>
								<option value="14" >Animation Japonaise</option>
							</select>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" data-dismiss="modal">Rechercher</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
					
					  
				</form>
			</div>

		</div>
	</div>
	

	
	<script type="text/javascript" src="js/inscription.js"></script>
	
    

 
	
	
	
 
</html>
	