<!doctype html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<?php
echo "<h1> Connexion </h1>
	<div class=\"form-popup\" id=\"formConnexion\">
		<form action='../Traitement/gestionConnexion.php' method='POST'>
		<div>
			<label>Mail :</label>
			<input type='email' name='mail_co' required=\"required\">
		</div>
		<div>
			<label>Mot de passe:</label>
			<input type='password' name='password' required=\"required\">
		</div>
		
		<button type=\"submit\" class=\"btn\">Connexion</button>
    	</form>
	</div>";
?>

</body>
</html>
