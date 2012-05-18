<?php require_once("../models/login.php");

$email     = $_POST['email'];
$password = $_POST['password'];

if($login->check_user($email,$password)){
	if($_SESSION['user_tipo']==2){
		header("Location: ../views/admin/admin_home.php");
	}else{
		header("Location: ../views/home.php?tipo={$_SESSION['user_tipo']}");
	}
}else{
	$_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";
	header("Location: ../views/login.php");
}
?>
