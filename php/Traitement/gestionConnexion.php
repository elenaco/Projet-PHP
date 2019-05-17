<?php
//a changer
include('../Class/User.php');
include_once('../../BDD/database.php');

session_start();

    $user = new User();
// appel à la fonction qui vérifie l'email entré 
// résultat fonction : $verif_mail

    $user = recupUtilisateur($_POST['mail'], $_POST['password']);
    $_SESSION['user'];


if ( $user->getId() == 0){    //si la fonction renvoie 0 le mail est incorrect
	echo "Email incorrect";
} else { 

//appel à la fonction qui vérifie que le mot de passe correspond à l'email
// résultat de la fonction : $verif_mdp

if ($user == 0){ //si la fonction renvoie 0 mdp incorrect
	echo "Mdp incorrect";
}
else {
	echo "Authentification réussie"; 
	$_SESSION['login'] = $_POST['mail_co'];
	header('location:index.php');
}
}

