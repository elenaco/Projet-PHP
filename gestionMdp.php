<?php
include('../Class/user.php');

$user = new user;

$oldPassword=oldPassword();

if($oldPassword != $_POST['password']){
    echo "Mauvais mot de passe";
}else{
    $user->setPassword($_POST['password']);
    //+appel fonction bdd
    changeUserPassword($user->getPassword());
    echo "Changement effectué";
}