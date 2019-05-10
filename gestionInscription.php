<?php
include('../Class/user.php');

 $user = new User;

 $user->setPseudo($_POST['pseudo']);
 $user->setNom($_POST['nom']);
 $user->setPrenom($_POST['prenom']);
 $user->setMail($_POST['mail']);
 $user->setPassword($_POST['password']);
 $user->setBio(" ");
 $user->setDateNaissance($_POST['date_naissance']);
 $user->setDateInscription(date("d-m-Y"));
 $user->setHidden(1);

 // appel fonction BDD
   // createUser($user->getPseudo(), $user->getNom(), $user->getPrenom(), $user->getMail(), $user->getPassword(), $user->getBio(), $user->getDateNaissance(), $user->getDateInscription(), $user->getHidden());

echo $user->getPseudo();