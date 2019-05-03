<?php
include('../Class/user.php');

$user = new user;

if($user->getPassword() != $_POST['password']){
    echo "Mauvais mot de passe";
}else{
    $user->setPassword($_POST['password']);
    //+appel fonction bdd
    echo "Changement effectué";
}