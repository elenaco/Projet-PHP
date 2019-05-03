<!doctype html>
<html>
	<head>
		<title>Modification mot de passe</title>
	</head>
	<body>
	<?php
	echo "<h1>Modification mot de passe  </h1>
	<div class=\"form-popup\" id=\"formConnexion\">
		<form action='GestionMdp.php' method='POST'>
		<div>
			<label>Ancien mot de passe:</label>
			<input type='password' name='password'>
		</div>
		<div>
			<label>Mot de passe:</label>
			<input type='password' name='password'>
		</div>
		<button type=\"submit\" class=\"btn\">Modidier</button>
    	</form>
	</div>";
?>