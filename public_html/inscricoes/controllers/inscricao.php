<?php
// comentario add por pita: Falta adicionar a validação de email ja cadastrado
// para evitar o mesmo email ser cadastrado duas vezes

require_once("../models/inscrito.php");

$name = $_POST['name'];
$name_cracha = $_POST['name_cracha'];

$email = $_POST['email'];
$email_confirm = $_POST['email_confirm'];

if(strcmp($email,$email_confirm) != 0){
	header("Location: ../views/index.php");
}

if(Inscrito::email_cadastrado($email)){
	header("Location: ../views/index.php");
}

$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];

if(strcmp($pass,$pass_confirm) != 0){
	header("Location: ../views/index.php");
}

$birth = $_POST['birth'];
$genero = $_POST['genero'];
$tshirt = $_POST['tshirt'];
$country = $_POST['country'];

if($country == "Brasil"){
	$cpf = $_POST['cpf'];
	$funcao = "cpf";
}else{
	$passport = $_POST['passport'];
	$funcao = "passaporte";
}

$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$phone = $_POST['phone'];
$type = $_POST['type'];

if($type == "senior"){
	$empresa = $_POST['empresa'];
	$cargo = $_POST['cargo'];
	$segmento = $_POST['segmento'];
	$funcao .= "senior";
}else{
	$federacao = $_POST['federacao'];
	$ej = $_POST['ej'];
	$cargo_jr = $_POST['cargo_jr'];
	$tempo = $_POST['tempo'];
	$funcao .= "junior";
}

Inscrito::inscrever($_POST,$funcao);
Inscrito::mandar_email($email);

?>
