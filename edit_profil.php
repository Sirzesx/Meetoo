
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/styleCo.css" />
    <link rel="stylesheet" href="css/scss.css" />
    <link href="bootstrap-glyphicons-master/css/bootstrap.icon-large.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>	
  
  <!-- Include the plugin's CSS and JS: -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

	
	
	
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
					  <a class="dropdown-item" href="edit_profil.php">Parametre</a>
					  <a class="dropdown-item" href="Deconnexion.php">Deconnexion</a>
					</div>
				</li>
			</ul>

		</nav>



		<div class="container">
		    <h1>Editer Profil</h1>
		  	<hr>
			<div class="row">
		      <!-- left column -->
		      <div class="col-md-3">
		        <div class="text-center">
		          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
		          <h6>Upload</h6>
		          
		          <input type="file" class="form-control">
		        </div>
		      </div>
		      
		      <!-- edit form column -->
		      <div class="col-md-9 personal-info">
		        
		        <h3>Information Personnel</h3>
		        
		        <form class="form-horizontal" role="form">
		          <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
				                            <div class="col-lg-9">
				                                <input class="form-control" type="text" value="Sirzesx">
				                            </div>
				                        </div>
				                        
				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
				                            <div class="col-lg-8">
				                                <input class="form-control" type="email" value="email@gmail.com">
				                            </div>
				                            <div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id0">
												  <label for="switch-id0">cacher</label>
												</div>
				                        </div>
				                        
				                        <div class="form-group row">
				                        	
				                            <label class="col-lg-3 col-form-label form-control-label"></label>
				                            <div class="col-lg-2">
				                                <input class="form-control" type="number" value="" placeholder="Code Postal">
				                            </div>
				                            <div class="col-lg-6">
				                                <input class="form-control" type="text" value="" placeholder="Ville">
				                            </div>
				                            <div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id1">
												  <label for="switch-id1">cacher</label>
												</div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Prenom</label>
				                            <div class="col-lg-9">
				                                <input class="form-control" type="text" value="NoName">
				                            </div>
				                        </div>

				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">date de Naissance</label>
				                            <div class="col-lg-8">
				                                <input class="form-control" type="date" value="NoName">
				                            </div>
				                            <div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id2">
												  <label for="switch-id2">cacher</label>
												</div>
				                        </div>


				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Mot de passe Actuel</label>
				                            <div class="col-lg-9">
				                                <input class="form-control" type="password" value="11111122333">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Nouveau Mot de Passe</label>
				                            <div class="col-lg-9">
				                                <input class="form-control" type="password" value="11111122333">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Confirmer Nouveau Mot de Passe</label>
				                            <div class="col-lg-9">
				                                <input class="form-control" type="password" value="11111122333">
				                            </div>
				                        </div>
				                        <hr size=”10″ />
				                         <h3>Information Complémentaire</h3>
				                        <div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf1">Type de relations</label>
											<select class="form-control col-lg-8 " id="modf1">
												<option value="0" selected="selected">Default</option>
												<option value="1" >Serieux</option>
												<option value="2" >Sans Engagement</option>
												<option value="3" >Ami</option>
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id3">
												  <label for="switch-id3">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf2">Situation</label>
											<select class="form-control col-lg-8 " id="modf2">
												<option value="0" selected="selected">Default</option>
												<option value="1" >Célibataire</option>
												<option value="2" >Marié(e)</option>
												<option value="3" >Séparé(e)/Divorsé(e)</option>
												<option value="4" >Veuf/Veuve</option>
												<option value="5" >Pacsé(e)</option>
												<option value="6" >Autre</option>
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id4">
												  <label for="switch-id4">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf3">Pays d'origine</label>
											<select class="form-control col-lg-8 " id="modf3">
												<optgroup label="Afrique">
												<option value="afriqueDuSud">Afrique Du Sud</option>
												<option value="algerie">Algérie</option>
												<option value="angola">Angola</option>
												<option value="benin">Bénin</option>
												<option value="botswana">Botswana</option>
												<option value="burkina">Burkina</option>
												<option value="burundi">Burundi</option>
												<option value="cameroun">Cameroun</option>
												<option value="capVert">Cap-Vert</option>
												<option value="republiqueCentre-Africaine">République Centre-Africaine</option>
												<option value="comores">Comores</option>
												<option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
												<option value="congo">Congo</option>
												<option value="coteIvoire">Côte d'Ivoire</option>
												<option value="djibouti">Djibouti</option>
												<option value="egypte">Égypte</option>
												<option value="ethiopie">Éthiopie</option>
												<option value="erythrée">Érythrée</option>
												<option value="gabon">Gabon</option>
												<option value="gambie">Gambie</option>
												<option value="ghana">Ghana</option>
												<option value="guinee">Guinée</option>
												<option value="guinee-Bisseau">Guinée-Bisseau</option>
												<option value="guineeEquatoriale">Guinée Équatoriale</option>
												<option value="kenya">Kenya</option>
												<option value="lesotho">Lesotho</option>
												<option value="liberia">Liberia</option>
												<option value="libye">Libye</option>
												<option value="madagascar">Madagascar</option>
												<option value="malawi">Malawi</option>
												<option value="mali">Mali</option>
												<option value="maroc">Maroc</option>
												<option value="maurice">Maurice</option>
												<option value="mauritanie">Mauritanie</option>
												<option value="mozambique">Mozambique</option>
												<option value="namibie">Namibie</option>
												<option value="niger">Niger</option>
												<option value="nigeria">Nigeria</option>
												<option value="ouganda">Ouganda</option>
												<option value="rwanda">Rwanda</option>
												<option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
												<option value="senegal">Séngal</option>
												<option value="seychelles">Seychelles</option>
												<option value="sierra">Sierra</option>
												<option value="somalie">Somalie</option>
												<option value="soudan">Soudan</option>
												<option value="swaziland">Swaziland</option>
												<option value="tanzanie">Tanzanie</option>
												<option value="tchad">Tchad</option>
												<option value="togo">Togo</option>
												<option value="tunisie">Tunisie</option>
												<option value="zambie">Zambie</option>
												<option value="zimbabwe">Zimbabwe</option>
												</optgroup>
												<optgroup label="Amérique">
												<option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
												<option value="argentine">Argentine</option>
												<option value="bahamas">Bahamas</option>
												<option value="barbade">Barbade</option>
												<option value="belize">Belize</option>
												<option value="bolivie">Bolivie</option>
												<option value="bresil">Brésil</option>
												<option value="canada">Canada</option>
												<option value="chili">Chili</option>
												<option value="colombie">Colombie</option>
												<option value="costaRica">Costa Rica</option>
												<option value="cuba">Cuba</option>
												<option value="republiqueDominicaine">République Dominicaine</option>
												<option value="dominique">Dominique</option>
												<option value="equateur">Équateur</option>
												<option value="etatsUnis">États Unis</option>
												<option value="grenade">Grenade</option>
												<option value="guatemala">Guatemala</option>
												<option value="guyana">Guyana</option>
												<option value="haiti">Haïti</option>
												<option value="honduras">Honduras</option>
												<option value="jamaique">Jamaïque</option>
												<option value="mexique">Mexique</option>
												<option value="nicaragua">Nicaragua</option>
												<option value="panama">Panama</option>
												<option value="paraguay">Paraguay</option>
												<option value="perou">Pérou</option>
												<option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
												<option value="sainteLucie">Sainte-Lucie</option>
												<option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
												<option value="salvador">Salvador</option>
												<option value="suriname">Suriname</option>
												<option value="triniteEtTobago">Trinité-et-Tobago</option>
												<option value="uruguay">Uruguay</option>
												<option value="venezuela">Venezuela</option>
												</optgroup>
												<optgroup label="Asie">
												<option value="afghanistan">Afghanistan</option>
												<option value="arabieSaoudite">Arabie Saoudite</option>
												<option value="armenie">Arménie</option>
												<option value="azerbaidjan">Azerbaïdjan</option>
												<option value="bahrein">Bahreïn</option>
												<option value="bangladesh">Bangladesh</option>
												<option value="bhoutan">Bhoutan</option>
												<option value="birmanie">Birmanie</option>
												<option value="brunei">Brunéi</option>
												<option value="cambodge">Cambodge</option>
												<option value="chine">Chine</option>
												<option value="coreeDuSud">Corée Du Sud</option>
												<option value="coreeDuNord">Corée Du Nord</option>
												<option value="emiratsArabeUnis">Émirats Arabe Unis</option>
												<option value="georgie">Géorgie</option>
												<option value="inde">Inde</option>
												<option value="indonesie">Indonésie</option>
												<option value="iraq">Iraq</option>
												<option value="iran">Iran</option>
												<option value="israel">Israël</option>
												<option value="japon">Japon</option>
												<option value="jordanie">Jordanie</option>
												<option value="kazakhstan">Kazakhstan</option>
												<option value="kirghistan">Kirghistan</option>
												<option value="koweit">Koweït</option>
												<option value="laos">Laos</option>
												<option value="liban">Liban</option>
												<option value="malaisie">Malaisie</option>
												<option value="maldives">Maldives</option>
												<option value="mongolie">Mongolie</option>
												<option value="nepal">Népal</option>
												<option value="oman">Oman</option>
												<option value="ouzbekistan">Ouzbékistan</option>
												<option value="pakistan">Pakistan</option>
												<option value="philippines">Philippines</option>
												<option value="qatar">Qatar</option>
												<option value="singapour">Singapour</option>
												<option value="sriLanka">Sri Lanka</option>
												<option value="syrie">Syrie</option>
												<option value="tadjikistan">Tadjikistan</option>
												<option value="taiwan">Taïwan</option>
												<option value="thailande">Thaïlande</option>
												<option value="timorOriental">Timor oriental</option>
												<option value="turkmenistan">Turkménistan</option>
												<option value="turquie">Turquie</option>
												<option value="vietNam">Viêt Nam</option>
												<option value="yemen">Yemen</option>
												</optgroup>
												<optgroup label="Europe">
												<option value="allemagne">Allemagne</option>
												<option value="albanie">Albanie</option>
												<option value="andorre">Andorre</option>
												<option value="autriche">Autriche</option>
												<option value="bielorussie">Biélorussie</option>
												<option value="belgique">Belgique</option>
												<option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
												<option value="bulgarie">Bulgarie</option>
												<option value="croatie">Croatie</option>
												<option value="danemark">Danemark</option>
												<option value="espagne">Espagne</option>
												<option value="estonie">Estonie</option>
												<option value="finlande">Finlande</option>
												<option value="france" selected="selected">France</option>
												<option value="grece">Grèce</option>
												<option value="hongrie">Hongrie</option>
												<option value="irlande">Irlande</option>
												<option value="islande">Islande</option>
												<option value="italie">Italie</option>
												<option value="lettonie">Lettonie</option>
												<option value="liechtenstein">Liechtenstein</option>
												<option value="lituanie">Lituanie</option>
												<option value="luxembourg">Luxembourg</option>
												<option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
												<option value="malte">Malte</option>
												<option value="moldavie">Moldavie</option>
												<option value="monaco">Monaco</option>
												<option value="norvege">Norvège</option>
												<option value="paysBas">Pays-Bas</option>
												<option value="pologne">Pologne</option>
												<option value="portugal">Portugal</option>
												<option value="roumanie">Roumanie</option>
												<option value="royaumeUni">Royaume-Uni</option>
												<option value="russie">Russie</option>
												<option value="saintMarin">Saint-Marin</option>
												<option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
												<option value="slovaquie">Slovaquie</option>
												<option value="slovenie">Slovénie</option>
												<option value="suede">Suède</option>
												<option value="suisse">Suisse</option>
												<option value="republiqueTcheque">République Tchèque</option>
												<option value="ukraine">Ukraine</option>
												<option value="vatican">Vatican</option>
												</optgroup>
												<optgroup label="Océanie">
												<option value="australie">Australie</option>
												<option value="fidji">Fidji</option>
												<option value="kiribati">Kiribati</option>
												<option value="marshall">Marshall</option>
												<option value="micronesie">Micronésie</option>
												<option value="nauru">Nauru</option>
												<option value="nouvelleZelande">Nouvelle-Zélande</option>
												<option value="palaos">Palaos</option>
												<option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
												<option value="salomon">Salomon</option>
												<option value="samoa">Samoa</option>
												<option value="tonga">Tonga</option>
												<option value="tuvalu">Tuvalu</option>
												<option value="vanuatu">Vanuatu</option>
												</optgroup>
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id5">
												  <label for="switch-id5">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf4">Niveau d'étude</label>
											<select class="form-control col-lg-8 " id="modf4">
												<option value="0" selected="selected">Default</option>
												<option value="1" >Pas de diplôme</option>
												<option value="2" >Brevet</option>
												<option value="3" >CAP / BEP</option>
												<option value="4" >BAC</option>
												<option value="5" >BAC +2</option>
												<option value="6" >BAC +3</option>
												<option value="7" > BAC +5 ou plus</option>
												<option value="8" >Autre</option>
												
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id6">
												  <label for="switch-id6">cacher</label>
											</div>
										</div>


										<div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Nombre d'enfants</label>
				                            <div class="col-lg-8">
				                                <input class="form-control" type="number" value="0">
				                            </div>
				                            <div class=" col-lg-1 switch">
											  <input type="checkbox" class="switch" id="switch-id7">
											  <label for="switch-id7">cacher</label>
				                            </div>
				                        </div>

				                        <div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Souhaitez-vous avoir des enfants ?</label>
			                                <div class=" col-lg-1 switch">
											  <input type="checkbox" class="switch" id="switch-id8">
											  <label for="switch-id8"></label>
				                            </div>
				                             <div class=" col-lg-1 switch">
											  <input type="checkbox" class="switch" id="switch-id9">
											  <label for="switch-id9">cacher</label>
				                            </div>
				                        </div>



										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf5">Religion</label>
											<select class="form-control col-lg-8 " id="modf5">
												<option value="0" selected="selected">Default</option>
												<option value="1" >Christianisme</option>
												<option value="2" >Islam</option>
												<option value="3" >Bouddhisme</option>
												<option value="4" >Judaïsme</option>
												<option value="5" >Hindouisme</option>
												<option value="6" >Athéïsme</option>
												<option value="8" >Autre</option>
												
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id10">
												  <label for="switch-id10">cacher</label>
											</div>
										</div>

										<div class="form-group row">
				                            <label class="col-lg-3 col-form-label form-control-label">Fumez-vous?</label>
			                                <div class=" col-lg-1 switch">
											  <input type="checkbox" class="switch" id="switch-id11">
											  <label for="switch-id11"></label>
				                            </div>
				                             <div class=" col-lg-1 switch">
											  <input type="checkbox" class="switch" id="switch-id12">
											  <label for="switch-id12">cacher</label>
				                            </div>
				                        </div>


				                        <div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf6">Poids</label>
											<select class="form-control col-lg-8 " id="modf6">
												<option value="0" selected="selected">Default</option>
												<option value="1" > Très mince</option>
												<option value="2" >mince</option>
												<option value="3" >Moyen</option>
												<option value="4" >large</option>
												<option value="5" >Tres large</option>
												
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id13">
												  <label for="switch-id13">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf7">Taille</label>
											<select class="form-control col-lg-8 " id="modf7">
												<option value="0" selected="selected">Default</option>
												<option value="1" >Nain</option>
												<option value="2" >Petit</option>
												<option value="3" >Moyen</option>
												<option value="4" >grand</option>
												<option value="5" >très grand</option>
												
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id14">
												  <label for="switch-id14">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf8">Type de cheveux</label>
											<select class="form-control col-lg-8 " id="modf8">
												<option value="0" selected="selected">Default</option>
												<option value="1" > Brun(e)</option>
												<option value="2" > Blond(e)</option>
												<option value="3" > Roux/Rousse</option>
												<option value="4" >Autre</option>
												
											</select>
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id15">
												  <label for="switch-id15">cacher</label>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label form-control-label" for="modf9">Centre d'interets</label>
											<select class="form-control col-lg-8" id="modf9" multiple="multiple">
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
											<div class=" col-lg-1 switch">
												  <input type="checkbox" class="switch" id="switch-id16">
												  <label for="switch-id16">cacher</label>
											</div>
										</div>

										<hr size=”10″ />
				                         <h3>Description :</h3>

				                         <textarea class="form-control" rows="5" id="comment"></textarea>











		          <div class="form-group">
		            <label class="col-md-3 control-label"></label>
		            <div class="col-md-8">
		              <input type="button" class="btn btn-primary" value="Save Changes">
		              <span></span>
		              <input type="reset" class="btn btn-default" value="Cancel">
		            </div>
		          </div>
		        </form>
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
	

