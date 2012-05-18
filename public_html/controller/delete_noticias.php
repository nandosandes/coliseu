<?php 	require_once("../model/login.php");
require_once("../model/noticias.php");
if(!$login->is_logged_in()) {
		header("location: index.php");	
	}

	$id = $_GET['id'];
	$noticia=Noticia::find_by_id($id);
	$noticia->delete();
	$_SESSION['wrong_login'] = "Noticía Deletada com Sucesso!";
	header ("location:../view/admin/admin_noticias.php");
exit();
?>
