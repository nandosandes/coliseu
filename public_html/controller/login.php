<?php

require_once("../model/login.php");

$user     = $_POST['username'];
$password = $_POST['password'];

if($login->check_user($user,$password)){
	header("Location: ../view/admin/admin_home.php");
}else{
	$_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";
	header("Location: ../view/login.php");
}
?>
