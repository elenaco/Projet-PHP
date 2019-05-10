<!doctype html>
<html>
	<head>
		<title>Inscription</title>
        <meta charset="utf-8">
	</head>
	<body>
<?php
echo "
<h1> Inscription </h1>
 
<div class=\"form-popup\" id=\"formInscription\">
	<form action='gestionInscription.php' method='POST'>
	
		<div>
			<label>Nom :</label>
			<input type='text' name='nom' id='nom' onblur=\"verifNom()\" required=\"required\">
			<div id='errorN'></div>
		</div>
		<div>
			<label>Prénom :</label>
			<input type='text' name='prenom' id='prenom' onblur=\"verifPrenom()\" required=\"required\">
			<div id='errorP'></div>
		</div>
		<div>
			<label>Pseudo :</label>
			<input type='text' name='pseudo'>
		</div>
		<div>
			<label>Mail :</label>
			<input type='email' name='mail' id='mail' onblur=\"verifMail()\" required=\"required\">
			<div id='errorM'></div>
		</div>
		<div>
			<label>Mot de passe :</label>
			<input type='password' name='password' required=\"required\">
		</div>
		<div>
			<label>Date de naissance :</label>
			<input type='date' name='date_naissance' id='age' onblur=\"verifAge()\" required=\"required\">
		</div>
		
	<button type=\"submit\" class=\"btn\" onclick=\"verifInfoUtilisateur()\" >Valider</button>
	</form>
	<form action='connexion.php' method='POST'>
	<button type=\"submit\" class=\"btn\">J'ai déjà un compte</button>
	</form>
</div>";
?>

<script type ="text/javascript" src="js/restrictionField.js"></script>

    </body>
</html>
