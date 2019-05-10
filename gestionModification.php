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

modifUser($user->getPseudo(), $user->getNom(), $user->getPrenom(), $user->getMail(), $user->getBio(), $user->getDateNaissance());

echo $user->getPseudo();