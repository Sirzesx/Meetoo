<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Inscription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
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
      <a class="navbar-brand" href="index.php">Logo</a>
      
      <!-- Links -->
      <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="inscription.php">S'inscrire</a>
      </li>

    </nav>



    <div class="container">
      <div class="jumbotron">
        <h2> Enregistrement </h2> 
        
        
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

         <!-- Partie inscription accueil 2 -->
        
          <div class="form-group">
              <label for="age">Age:</label>
                <input type="number" class="form-control" id="age">
          </div>
		  
		  
			<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="email" class="form-control" id="pseudo" placeholder="Entrez Pseudo">
				
			</div>
			
		<div class="row">
          <div class="col-md-4">	
			<div class="form-group">
				<label for="password">Mot de Passe</label>
				<input type="password" class="form-control" id="password" placeholder="Mot de Passe">
			</div>
		</div>

          <div class="offset-md-1 col-md-4">
			<div class="form-group">
				<label for="passwordConfirmation">Confirmation Mot de Passe</label>
				<input type="password" class="form-control" id="passwordConfirmation" placeholder="Veuillez resaisir le Mot de Passe">
			</div>
		   </div>
        </div>
		
		<div class="row">
          <div class="col-md-4">	
			<div class="form-group">
				<label for="email">Mot de Passe</label>
				<input type="email" class="form-control" id="email" placeholder="email">
			</div>
		</div>

          <div class="offset-md-1 col-md-4">
			<div class="form-group row">
				<label for="emailConfirmation">Confirmation Mot de Passe</label>
				<input type="email" class="form-control" id="emailConfirmation" placeholder="Veuillez resaisir votre email">
			</div>
		   </div>
        </div>
        
	<fieldset>
		<legend>Veuillez sélectionner vos intérêts</legend>
		<div>
		  <input type="checkbox" id="coding" name="interest" value="coding">
		  <label for="coding">Développement</label>
		</div>
		<div>
		  <input type="checkbox" id="music" name="interest" value="music">
		  <label for="music">Musique</label>
		</div>
		<div>
		  <input type="checkbox" id="art" name="interest" value="art">
		  <label for="art">Art</label>
		</div>
		<div>
		  <input type="checkbox" id="sports" name="interest" value="sports">
		  <label for="sports">Sports</label>
		</div>
		<div>
		  <input type="checkbox" id="cooking" name="interest" value="cooking">
		  <label for="cooking">Cuisine</label>
		</div>
		<div>
		  <input type="checkbox" id="other" name="interest" value="other">
		  <label for="other">Autre</label>
		  <input type="text" id="otherValue" name="other">
		</div>
    
  </fieldset>
		
		
        <button type="submit" class="btn btn-primary btn-md">Etape Suivante</button>


      </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>