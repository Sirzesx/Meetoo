<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Inscription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>


<!-- Corps du Site -->


  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
      <a class="navbar-brand" href="index.php"><h2 class="logo">Meetoo</h2></a>
      
      <!-- Links -->
      <ul class="navbar-nav">

		  <li class="nav-item">
			<a class="nav-link" href="connexion.php">Connexion</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link" href="inscription.php">S'inscrire</a>
		  </li>
		</ul>
    </nav>


  



<form id="regForm" name="regForm" action="traitementInscription.php" method="POST"> <!-- action à modifier -->
    <div class="container">
      <div class="jumbotron">	<!-- retirer Register ou Enregistrement -->
        <h2> Enregistrement </h2> 
        
        <div class="tab">
        <!--Debut de la partie inscription-->
        <!-- Partie inscription accueil 1 -->
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
                <label for="sexe">Je suis </label>
                <select class="form-control" id="sexe">
                  <option>Un Homme </option>
                  <option>Une Femme</option>

                </select> 
            </div>
          </div>

          <div class="offset-md-1 col-md-3">
            <div class="form-group">
                <label for="sexesearch">Je cherche </label>
                <select class="form-control" id="sexesearch">
                  <option>Un Homme </option>
                  <option>Une Femme</option>
                </select> 
            </div>
          </div>
        </div>
    </div>
         <!-- Partie inscription accueil 2 -->
        <div class="tab">
		<div class="row">
			<div class="col-md-5">
				<div class="form-group">
					<label for="nom">Nom:</label>
					   <input type="text" class="form-control" id="nom" name="nom">
				</div>
			</div>
			
			<div class="offset-md-1 col-md-5">
				<div class="form-group">
					<label for="prenom">Prénom:</label>
					   <input type="text" class="form-control" id="prenom" name="prenom">
				</div>
			</div>
		</div>
		
		
		<div class="form-group">
              <label for="dateN">date de naissance:</label>
                <input type="date" class="form-control" id="dateN" name="dateN">
		</div>
		
		  
		  
		<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="text" class="form-control" id="pseudo" placeholder="Entrez Pseudo" name="pseudo">
				<span id="pseudo-dispo"></span>
		</div>
			
		<div class="row">
          <div class="col-md-5">	
			<div class="form-group">
				<label for="password">Mot de Passe</label>
				<input type="password" class="form-control" id="password" placeholder="Mot de Passe" name="password">
			</div>
		</div>

        <div class="offset-md-1 col-md-5">
			<div class="form-group">
				<label for="passwordConfirmation">Confirmation Mot de Passe</label>
				<input type="password" class="form-control" id="passwordConfirmation" placeholder="Veuillez confirmer votre mot de Passe">
			</div>
		   </div>
        </div>
		
		<div class="row">
          <div class="col-md-5">	
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="email" name="email">
			</div>
		</div>

          <div class="offset-md-1 col-md-5">
			<div class="form-group">
				<label for="emailConfirmation">Confirmation Email</label>
				<input type="email" class="form-control" id="emailConfirmation" placeholder="Veuillez confirmer votre email">
			</div>
		   </div>
        </div>
		
        <label>Localisation</label>
       <div class="form-group row">
                              
          <div class="col-lg-5">
              <input class="form-control" type="number" value="" placeholder="Code Postal">
          </div>
          <div class="col-lg-5">
              <input class="form-control" type="text" value="" placeholder="Ville">
          </div>
		</div>
		
      </div>
    </div>

    <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" class="btn btn-secondary btn-lg" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
      <button type="button" class="btn btn-success btn-lg" id="nextBtn" onclick="nextPrev(1)">Confirmer</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>			
  </div>
</form>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/inscription.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>