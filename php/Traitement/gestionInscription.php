<?php
include('../Class/User.php');

session_start();
 $user = new User;

 $user->setPseudo($_POST['pseudo']);
 $user->setNom($_POST['nom']);
 $user->setPrenom($_POST['prenom']);
 $user->setMail($_POST['mail']);
 $user->setBio(" ");
 $user->setDateNaissance($_POST['date_naissance']);
 $user->setDateInscription(date("Y-m-d"));


 // appel fonction BDD
   $_SESSION['id'] = createUser($user,$_POST['password']);


header('Location: index.php');