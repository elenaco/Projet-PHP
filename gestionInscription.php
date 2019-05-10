<?php
include('../Class/User.php');

 $user = new User;

 $user->setPseudo($_POST['pseudo']);
 $user->setNom($_POST['nom']);
 $user->setPrenom($_POST['prenom']);
 $user->setMail($_POST['mail']);
 $user->setBio(" ");
 $user->setDateNaissance($_POST['date_naissance']);
 $user->setDateInscription(date("Y-m-d"));
 $user->setHidden(1);

 // appel fonction BDD
   // createUser($user,$POST['password']);
