<?php

require_once("../model/banner.php");

$diretorio = "../images/banner/";

//Adding a banner
if(!isset($_GET['n'])){

	$count = 0;

	if($_FILES['picture1']['type'] != null){
		$picture1 = $image->createImagem($_FILES['picture1'],182,$diretorio);
		$count++;
	}

	if($_FILES['picture2']['type'] != null){
		$picture2 = $image->createImagem($_FILES['picture2'],182,$diretorio);
		$count++;
	}

	if($_FILES['picture3']['type'] != null){
		$picture3 = $image->createImagem($_FILES['picture3'],182,$diretorio);
		$count++;
	}

	header("Location: ../view/admin/admin_banner_delete.php?n={$count}");

}else{
//Deleting a banner	
	$n = $_GET['n'];

	while($n != 0){
		if(isset($_POST['choose_one0'])){
			$image->deleteBanner($_POST['id0']);
		}
		if(isset($_POST['choose_one1'])){
			$image->deleteBanner($_POST['id1']);
		}
		if(isset($_POST['choose_one2'])){
			$image->deleteBanner($_POST['id2']);
		}
		$n--;
	}
	
	$_SESSION['flash_notice'] = "Banners Atualizado com sucesso!";
	
	header("Location: ../view/admin/admin_banner.php");
}
?>
