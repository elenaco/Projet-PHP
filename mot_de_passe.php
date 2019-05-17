<!doctype html>
<html>
	<head>
		<title>Modification mot de passe</title>
	</head>
	<body>
	<?php
	echo "<h1>Modification mot de passe  </h1>
	<div class=\"form-popup\" id=\"formConnexion\">
		<form action='../Traitement/gestionMdp.php' method='POST'>
		<div>
			<label>Mot de passe:</label>
			<input type='password' name='password'>
		</div>
		<button type=\"submit\" class=\"btn\">Modidier</button>
    	</form>
	</div>";
?>