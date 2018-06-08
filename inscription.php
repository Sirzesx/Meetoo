<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Inscription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

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


  





<form id="regForm" action="/action_page.php"> <!-- action à modifier -->
  <h1>Register:</h1>
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
			<div class="col-md-3">
				<div class="form-group">
					<label for="nom">Nom:</label>
					   <input type="text" class="form-control" id="age">
				</div>
			</div>
			
			<div class="offset-md-2 col-md-3">
				<div class="form-group">
					<label for="prenom">Prénom:</label>
					   <input type="text" class="form-control" id="age">
				</div>
			</div>
		</div>
		
		
		<div class="form-group">
              <label for="dateN">date de naissance:</label>
                <input type="date" class="form-control" id="dateN">
		</div>
		
		  
		  
		<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="text" class="form-control" id="pseudo" placeholder="Entrez Pseudo">
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
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="email">
			</div>
		</div>

          <div class="offset-md-1 col-md-4">
			<div class="form-group row">
				<label for="emailConfirmation">Confirmation Email</label>
				<input type="email" class="form-control" id="emailConfirmation" placeholder="Veuillez resaisir votre email">
			</div>
		   </div>
        </div>
		
		</div>
		<div class="tab">
		<fieldset id="field1">
			<legend>Type de relation recherchée</legend>
			<div>
			  <input type="radio" id="long" name="relationship" value="long">
			  <label for="long">Sérieux</label>
			</div>
			<div>
			  <input type="radio" id="rapide" name="relationship" value="rapide">
			  <label for="rapide">Sans engagement</label>
			</div>
			<div>
			  <input type="radio" id="ami" name="relationship" value="ami">
			  <label for="ami">Ami</label>
			</div>
			
			<div>
			  <input type="radio" id="inconnu" name="relationship" value="inconnu">
			  <label for="inconnu">Je ne sais pas </label>
			</div>
		
		
		</fieldset>
		</div>
		

		<div class="tab">
		<fieldset id="field2">
			<legend>Avez-vous des enfants ?</legend>
			<div>
			  <input type="radio" id="havechild" name="havechild" value="yes">
			  <label for="havechild">Oui combien?</label>
			  <input type="number" id="otherValue" name="other">
			</div>
			
			<div>
			  <input type="radio" id="havechild" name="havechild" value="non">
			  <label for="havechild">Non</label>
			</div>
			
			<div>
			  <input type="radio" id="childnon" name="height" value="heightnon">
			  <label for="heightnon">Ne souhaite pas répondre</label>
			</div>
			
		</fieldset>
		<br />
		<fieldset id="field3">
			<legend>Voulez-vous des enfants ? </legend>
			<div>
			  <input type="radio" id="wantchild" name="wantchild" value="yes">
			  <label for="wantchild">Oui combien?</label>
			  <input type="number" id="otherValue" name="other">
			</div>
			
			<div>
			  <input type="radio" id="wantchild" name="wantchild" value="non">
			  <label for="wantchild">Non</label>
			</div>
			
			<div>
			  <input type="radio" id="wantchildnon" name="height" value="heightnon">
			  <label for="heightnon">Ne souhaite pas répondre</label>
			</div>
			
		</fieldset>
		
		</div>


		<div class="tab">
		<fieldset id="field4">
			<legend>Quel est votre niveau d'études</legend>
			<div>
			  <input type="radio" id="none" name="etude" value="none">
			  <label for="none">Pas de diplôme</label>
			</div>
			<div>
			  <input type="radio" id="brevet" name="etude" value="brevet">
			  <label for="brevet">Brevet</label>
			</div>
			<div>
			  <input type="radio" id="capbep" name="etude" value="capbep">
			  <label for="capbep">CAP / BEP </label>
			</div>
			<div>
			  <input type="radio" id="bac" name="etude" value="bac">
			  <label for="bac">BAC</label>
			</div>
			<div>
			  <input type="radio" id="bac2" name="etude" value="bac2">
			  <label for="bac2">BAC +2</label>
			</div>
			
			<div>
			  <input type="radio" id="bac3" name="etude" value="bac3">
			  <label for="bac3">BAC +3</label>
			</div>
			
			<div>
			  <input type="radio" id="bac5" name="etude" value="bac5">
			  <label for="bac5">BAC +5 ou plus</label>
			</div>
			<div>
			  <input type="radio" id="other" name="etude" value="other">
			  <label for="other">Autre</label>
			  <input type="text" id="otherValue" name="other">
			</div>
			
			<div>
			  <input type="radio" id="etudenon" name="height" value="heightnon">
			  <label for="heightnon">Ne souhaite pas répondre</label>
			</div>
			
		</fieldset>
        </div>

        <div class="tab">
		<fieldset id="field5">
			<legend>Situation Familiale</legend>
			<div>
			  <input type="radio" id="celibataire" name="situation" value="celibataire">
			  <label for="celibataire">Célibataire</label>
			</div>
			<div>
			  <input type="radio" id="marie" name="situation" value="marie">
			  <label for="marie">Marié(e)</label>
			</div>
			<div>
			  <input type="radio" id="separedivorse" name="situation" value="separedivorse">
			  <label for="separedivorse">Séparé(e)/Divorsé(e)</label>
			</div>
			<div>
			  <input type="radio" id="veuf" name="situation" value="veuf">
			  <label for="veuf">Veuf/Veuve</label>
			</div>
			<div>
			  <input type="radio" id="pacse" name="situation" value="pacse">
			  <label for="pacse">Pacsé(e)</label>
			</div>
			<div>
			  <input type="radio" id="other" name="situation" value="other">
			  <label for="other">Autre</label>
			  <input type="text" id="otherValue" name="other">
			</div>
			
			<div>
			  <input type="radio" id="situationnon" name="height" value="heightnon">
			  <label for="heightnon">Ne souhaite pas répondre</label>
			</div>
			
		
		</fieldset>
  		</div>

  		<div class="tab">
		<fieldset id="field6">
			<legend>Quel est votre poids ? </legend>
			<div>
			  <input type="radio" id="weightxs" name="weight" value="weightxs">
			  <label for="weightxs"> Très mince</label>
			</div>
			<div>
			  <input type="radio" id="weights" name="weight" value="weights">
			  <label for="weights">mince</label>
			</div>
			<div>
			  <input type="radio" id="weightm" name="weight" value="weightm">
			  <label for="weightm">Moyen</label>
			</div>
			<div>
			  <input type="radio" id="weightl" name="weight" value="weightl">
			  <label for="weightl">large</label>
			</div>
			<div>
			  <input type="radio" id="weightxl" name="weight" value="weightxl">
			  <label for="weightxl">Tres large </label>
			</div>
			<div>
			  <input type="radio" id="weightnon" name="weight" value="weightnon">
			  <label for="weightnon">Ne souhaite pas répondre</label>
			</div>	
		
		</fieldset>
		</div>

		<div class="tab">
		<fieldset id="field7">
			<legend>Quel est votre couleur de cheveux? </legend>
			<div>
			  <input type="radio" id="hairbrown" name="haircolor" value="hairbrown">
			  <label for="hairbrown">Brun(e)</label>
			</div>
			<div>
			  <input type="radio" id="hairblond" name="haircolor" value="hairblond">
			  <label for="hairblond">Blond(e) </label>
			</div>
			<div>
			  <input type="radio" id="hairred" name="haircolor" value="hairred">
			  <label for="hairred">Roux/Rousse</label>
			</div>
			
			<div>
			  <input type="radio" id="hairother" name="haircolor" value="hairother">
			  <label for="hairother">A préciser </label> <!-- ??? -->
			</div>
			<div>
			  <input type="radio" id="hairnone" name="haircolor" value="hairnone">
			  <label for="hairnone">Ne souhaite pas répondre</label>
			</div>	
		
		</fieldset>
		</div>
		<div class="tab">
		<fieldset id="field8">
			<legend> Veuillez selectionner votre pays d'origine </legend>
		
			<select name="pays" id="pays">
				<?php
					$liste_pays= fopen("liste_pays.txt","r");
					while($ligne=fgets($liste_pays,1024))
					{
						$ligne=explode(';',$ligne);
						if ($ligne[1]=='FR') echo '<option value='.$ligne[1].' selected="selected">'.$ligne[2].'</option>';
						else echo '<option value='.$ligne[1].'>'.$ligne[2].'</option>';
					}
				?>
			</select>
		
		</fieldset>
		</div>
		
		<div class="tab">
		<fieldset id="field9">
			<legend>Quel est votre religion? </legend>
			<div>
			  <input type="radio" id="religionchrist" name="religion" value="religionchrist">
			  <label for="religionchrist"> Christianisme</label>
			</div>
			<div>
			  <input type="radio" id="religionislam" name="religion" value="religionislam">
			  <label for="religionislam">Islam</label>
			</div>
			<div>
			  <input type="radio" id="religionBouddh" name="religion" value="religionBouddh">
			  <label for="religionBouddh">Bouddhisme</label>
			</div>
			<div>
			  <input type="radio" id="religionjud" name="religion" value="religionjud">
			  <label for="religionjud">Judaïsme</label>
			</div>
			<div>
			  <input type="radio" id="religionhind" name="religion" value="religionhind">
			  <label for="religionhind">Hindouisme </label>
			</div>
			
			<div>
			  <input type="radio" id="religionath" name="religion" value="religionath">
			  <label for="religionath">Athéïsme</label>
			</div>
			
			<div>
			  <input type="radio" id="religionother" name="religion" value="religionother">
			  <label for="religionother">Autre : </label>
			  <input type="text" id="otherValue" name="other">

			</div>
			
			<div>
			  <input type="radio" id="religionnone" name="religion" value="religionnone">
			  <label for="religionnone">Ne souhaite pas répondre</label>
			</div>	
		
		</fieldset>
		</div>
		<div class="tab">
		<fieldset id="field10">
			<legend>Est-ce que vous fumez ? </legend>
			<div>
			  <input type="radio" id="yousmokeoui" name="yousmoke" value="yousmokeoui">
			  <label for="yousmokeyes">Oui</label>
			</div>
			<div>
			  <input type="radio" id="yousmokenon" name="yousmoke" value="yousmokenon">
			  <label for="yousmokenon">Non</label>
			</div>
			
			<div>
			  <input type="radio" id="yousmokenone" name="yousmoke" value="yousmokenone">
			  <label for="yousmokenone">Ne souhaite pas répondre</label>
			</div>	
		
		</fieldset>
	</div>
		
		<div class="tab">
		<fieldset id="field11">
			<legend>Veuillez sélectionner vos centres d'intérêts</legend>
			<div>
			  <input type="checkbox" id="coding" name="interest" value="coding">
			  <label for="coding">Informatique</label>
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
			  <input type="checkbox" id="electronic" name="interest" value="electronic">
			  <label for="electronic">Electronique</label>
			</div>
			
			<div>
			  <input type="checkbox" id="gaming" name="interest" value="gaming">
			  <label for="gaming">Jeux videos</label>
			</div>
			
			<div>
			  <input type="checkbox" id="photo" name="interest" value="photo">
			  <label for="photo">Photographie</label>
			</div>
			
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Couture</label>
			</div>
			
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Bricolage</label>
			</div>
			
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Jardinage</label>
			</div>
			
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Lecture</label>
			</div>
	
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Film/Série</label>
			</div>
		
			<div>
			  <input type="checkbox" id="cooking" name="interest" value="cooking">
			  <label for="cooking">Animation Japonaise</label>
			</div>
		</fieldset>
		
		</div>
		

		
    <!--<button type="submit" class="btn btn-primary btn-md">Etape Suivante</button>-->


      </div>
    </div>

    <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>			
  </div>
</form>

	<script type="text/javascript" src="js/inscription.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
