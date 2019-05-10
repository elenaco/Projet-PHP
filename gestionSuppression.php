<?php
include('../Class/user.php');

$user = new user();

 $user->setHidden(0);

 deleteUser($user->getHidden());