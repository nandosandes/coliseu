<?php

require_once("../../model/login.php");

if(!$login->is_logged_in()){
	$_SESSION['flash_notice'] = "Por favor, fa&ccedil;a login para ter acesso à &aacute;rea restrita.";
	header("Location: ../../view/login.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Bem-vindo!</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/demo_table.css" type="text/css" media="screen" />    
    <script type="text/javascript" charset="utf-8" src="../../scripts/jquery-1.3.min.js"></script>
    <script type='text/javascript' src="../../scripts/jquery.dataTables.js"> </script>
    <script type="text/javascript">
			$(document).ready(function(){
				
				$('#example').dataTable( {

					"sPaginationType": "full_numbers"

				} );
				
				$('select.autocomplete').show();

				$('select.autocomplete').select_autocomplete();

			});
	</script>  
</head>

<body>
	
