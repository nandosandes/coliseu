<?php
require_once "../model/foto.php";

$img = new Foto();

$ft =$_FILES['file_upload'];
if(isset($ft)){
	if($img->enviar_arquivo($ft)){
		if($img->save()){
			header("location: ../view.php");
		}else{
			echo "Erro ao salvar imagem.<br>";
			print_r($img->errors);
			header("location: ../view/index.php");
		}
	}else 
		header("location: ../view/index.php");
}
?>