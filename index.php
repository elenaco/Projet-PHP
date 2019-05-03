<!doctype html>
<html>
	<head>
		<title>Kikowaena</title>
		<style type="text/css">
		</style>
	</head>
	<body>
	<?php
session_start();
//if (!isset ($_SESSION['login']) ){  //Pas connecté on affiche le formulaire 
//	header('location:inscription.php');
//else 
//	header('location:pagePerso.php'); //on affiche la page de profil 
echo"
   <a href= \"modification.php\" target=\"_blanck\"><font color=\"grey\">Mes infos</a>
   <a href= \"deconnexion.php\" target=\"_blanck\"><font color=\"grey\">Deconnexion</a>
   "
	?>
	
	
	</body>
</html>
