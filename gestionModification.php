<?php
include('../Class/user.php');

$user = new user;

$user->setPseudo($_POST['pseudo']);
$user->setNom($_POST['nom']);
$user->setPrenom($_POST['prenom']);
$user->setMail($_POST['mail']);
$user->setBio($_POST['bio']);
$user->setDateNaissance($_POST['date_naissance']);

//+ appel fonction BDD

echo $user->getPseudo();