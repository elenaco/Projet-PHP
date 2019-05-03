<!doctype html>
<html>
	<head>
		<title>Inscription</title>
	</head>
	<body>
	<?php
	echo "
<h1> Inscription </h1>
 
<div class=\"form-popup\" id=\"formInscription\">

	<form action='Traitement/gestionInscription.php' method='POST'>
	
		<div>
			<label>Nom :</label>
			<input type='text' name='nom' required=\"required\">
		</div>
		<div>
			<label>Prénom :</label>
			<input type='text' name='prenom' required=\"required\">
		</div>
		<div>
			<label>Pseudo :</label>
			<input type='text' name='pseudo'>
		</div>
		<div>
			<label>Mail :</label>
			<input type='email' name='mail' required=\"required\">
		</div>
		<div>
			<label>Mot de passe :</label>
			<input type='password' name='password' required=\"required\">
		</div>
		<div>
			<label>Date de naissance :</label>
			<input type='date' name='date_naissance' required=\"required\">
		</div>
		
	<button type=\"submit\" class=\"btn\">Valider</button>
	</form>
	<form action='connexion.php' method='POST'>
	<button type=\"submit\" class=\"btn\">J'ai déjà un compte</button>
	</form>
</div>";
?>