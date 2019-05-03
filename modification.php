<!doctype html>
<html>
	<head>
		<title>Profil</title>
	</head>
	<body>
	<?php
	echo "<h1> Mes infos </h1>
	<div class=\"form-popup\" id=\"formModification\">
		<form action='gestionModification.php' method='POST'>
			<div>
				<label>Nom :</label>
				<input type='text' name='nom'>
			</div>
			<div>
				<label>Prénom :</label>
				<input type='text' name='prenom'>
			</div>
			<div>
				<label>Pseudo :</label>
				<input type='text' name='pseudo'>
			</div>
			<div>
				<label>Date de naissance :</label>
				<input type='date' name='date_naissance'>
			</div>
			<div>
			   <label>Biographie :</label> </br>
			   <textarea name='bio'></textarea>
			</div>
			<div>
				<label>Mail :</label>
				<input type='email' name='mail'>
			</div>
			<button type=\"submit\" class=\"btn\">Valider les modifications</button>
		</form>
	</div>
	<div>
		<form action='mot_de_passe.php' method='POST'>
			<button type=\"submit\" class=\"btn\">Mettre à jour le mot de passe</button>
		</form>
	</div>";
?>