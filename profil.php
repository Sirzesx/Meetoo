

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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>	
  
  <!-- Include the plugin's CSS and JS: -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"></script>
	
	
	
	<body class="bodyco">

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand -->
		  <a class="navbar-brand" href="Coindex.php">Logo</a>
		  
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
					  <a class="dropdown-item" href="#">Parametre</a>
					  <a class="dropdown-item" href="Deconnexion.php">Deconnexion</a>
					</div>
				</li>
			</ul>

		</nav>



		<div class="container">
		    <div class="row my-2">
		        <div class="col-lg-8 order-lg-2">
		            <ul class="nav nav-tabs">
		                <li class="nav-item">
		                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
		                </li>
		                <li class="nav-item">
		                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit </a>
		                </li>
		                <li class="nav-item">
		                    <a href="" data-target="#edit-info-profil" data-toggle="tab" class="nav-link">Edit Information Profil</a>
		                </li>
		            </ul>

		            <div class="tab-content py-4">
		                <div class="tab-pane active" id="profile">
		                    <h5 class="mb-3">Profil Utilisateur</h5>
		                    <div class="row">
		                        <div class="col-md-6">
		                         	Type de relation recherché : 
		                         	Nombre d'enfant :
		                         	Vouloir des enfants ? 
		                         	Niveau d'étude :
		                         	Situation Familial :
		                         	
		                        </div>
		                    </div>
		                    <!--/row-->
		                </div>
		                
		                <div class="tab-pane" id="edit">
		                    <form role="form">
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="text" value="Jane">
		                            </div>
		                        </div>
		                        
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="email" value="email@gmail.com">
		                            </div>
		                        </div>
		                        
		                        <div class="form-group row">
		                        	
		                            <label class="col-lg-3 col-form-label form-control-label"></label>
		                            <div class="col-lg-6">
		                                <input class="form-control" type="number" value="" placeholder="Code Postal">
		                            </div>
		                            <div class="col-lg-3">
		                                <input class="form-control" type="text" value="" placeholder="Ville">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="text" value="janeuser">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="password" value="11111122333">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="password" value="11111122333">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label"></label>
		                            <div class="col-lg-9">
		                                <input type="reset" class="btn btn-secondary" value="Cancel">
		                                <input type="button" class="btn btn-primary" value="Save Changes">
		                            </div>
		                        </div>
		                    </form>
		                </div>

		                 <div class="tab-pane" id="edit-info-profil">
		                    <form role="form">
		                    	<div class="form-group row">
		                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
		                            <div class="col-lg-9">
		                                <input class="form-control" type="text" value="janeuser">
		                            </div>
		                        </div>
		                    </form>
		                 </div>


		            </div>
		        </div>
		        <div class="col-lg-4 order-lg-1 text-center">
		            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
		            <h6 class="mt-2">Photo de profil</h6>
		            <label class="custom-file">
		                <input type="file" id="file" class="custom-file-input">
		                <span class="custom-file-control">Choose file</span>
		            </label>
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
	