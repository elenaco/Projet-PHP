<?php
include('../Class/user.php');
 echo "coucou";
 $user = new user;

 $user->setPseudo($_POST['pseudo']);
 $user->setNom($_POST['nom']);
 $user->setPrenom($_POST['prenom']);
 $user->setMail($_POST['mail']);
 $user->setPassword($_POST['password']);
 $user->setDateNaissance($_POST['date_naissance']);
 $user->setDateInscription(date("d-m-Y"));


echo $user->getPseudo();