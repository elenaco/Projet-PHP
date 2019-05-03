<?php
session_start();

// appel à la fonction qui vérifie l'email entré 
// résultat fonction : $verif_mail

if ( $verif_mail == 0){    //si la fonction renvoie 0 le mail est incorrect
	echo "Email incorrect";
} else { 

//appel à la fonction qui vérifie que le mot de passe correspond à l'email
// résultat de la fonction : $verif_mdp

if ($verif_mdp == 0){ //si la fonction renvoie 0 mdp incorrect 
	echo "Mdp incorrect";
}
else {
	echo "Authentification réussie"; 
	$_SESSION['login'] = $_POST['mail_co'];
	header('location:index.php');
}
}

