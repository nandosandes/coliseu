<?php require_once("../models/login.php");

$email     = $_POST['email'];
$password = $_POST['password'];

if($login->check_user($email,$password)){
	if($_SESSION['user_tipo']==1){
		header("Location: ../views/admin/admin_home.php"); // Redireciona para a area adm
	}else{
		header("Location: ../views/home.php"); // Redireciona para a parte do congressista
	}
}else{
	$_SESSION['flash_notice'] = "Login e Senha n&atilde;o conferem";
	header("Location: ../views/login.php");
}
?>
