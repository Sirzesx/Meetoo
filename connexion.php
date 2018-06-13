<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Connexion</title>
    <meta charset="utf-8">
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
		  </ul>

		</nav>


<!--
    <div class="container">
      <div class="jumbotron">
        <h2>Connexion</h2> 
        -->
        <!--Debut de la partie inscription-->
        <!-- Partie inscription accueil 1 -->
		<!--
        <form action ="" method="POST" id="formconnexion">
			<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="email" class="form-control" id="pseudo" placeholder="Entrez Pseudo">
				
			</div>
			<div class="form-group">
				<label for="password">Mot de Passe</label>
				<input type="password" class="form-control" id="password" placeholder="Mot de Passe">
			</div>
			<button type="submit" class="btn btn-primary">Se connecter</button>
		</form>


      </div>
    </div>

-->
	<div class="container" id="containConnexion">
		<div class="jumbotron" id="jumbConnexion">
			<div class="text-center">
				<form class="form-signin">
				  <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
				  <label for="inputEmail" class="sr-only">Email address</label>
				  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				  <label for="inputPassword" class="sr-only">Password</label>
				  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

				  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				  <p class="mt-5 mb-3 text-light">&copy; FIP1 2017-2018</p>
				</form>
			</div>
		</div>
	</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>