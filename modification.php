<!doctype html>
<html>
	<head>
		<title>Profil</title>
        <meta charset="utf-8">
	</head>
	<body>
<?php
echo "<h1> Mes infos </h1>
	<div class=\"form-popup\" id=\"formModification\">
		<form action='../Traitement/gestionModification.php' method='POST'>
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
				<input type='text' name='pseudo' required=\"required\">
			</div>
			<div>
				<label>Date de naissance :</label>
				<input type='date' name='date_naissance' required=\"required\">
			</div>
			<div>
			   <label>Biographie :</label> </br>
			   <textarea name='bio'></textarea>
			</div>
			<div>
				<label>Mail :</label>
				<input type='email' name='mail' required=\"required\">
			</div>
			<button type=\"submit\" class=\"btn\">Valider les modifications</button>
		</form>
	</div>
	<div>
		<form action='mot_de_passe.php' method='POST'>
			<button type=\"submit\" onclick=\"verifChangementInfoUser()\" class=\"btn\">Mettre à jour le mot de passe</button>
		</form>
	</div>";
?>

<script type ="text/javascript" src="../../scripts/restrictionField.js"></script>
    </body>
</html>
