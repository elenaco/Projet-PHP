<?php
include('../Class/User.php');
include_once ('../database/request.php');

session_start();

$user = new user();

delUser($_SESSION['id']);