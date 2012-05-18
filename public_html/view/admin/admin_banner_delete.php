<?php

require_once("../../model/banner.php");
global $image;

if($_GET['n'] == 1){
	echo "Selecione o banner a ser substituido";
}else{
	echo "Selecione {$_GET['n']} banners a serem substituidos";
}

$image->chooseBanner();

?>
