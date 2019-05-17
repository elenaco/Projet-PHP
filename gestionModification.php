<?php
include('../Class/User.php');

session_start();

$user = new user;

$user->setId($_SESSION['id']);
$user->setPseudo($_POST['pseudo']);
$user->setNom($_POST['nom']);
$user->setPrenom($_POST['prenom']);
$user->setMail($_POST['mail']);
$user->setBio($_POST['bio']);
$user->setDateNaissance($_POST['date_naissance']);

//+ appel fonction BDD

modifUser($user);

echo $user->getPseudo();