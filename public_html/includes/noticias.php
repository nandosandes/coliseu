<?php require_once("../model/login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("../model/login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Notícias</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />

	<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="../css/demo_table2.css" type="text/css" media="screen" />  
    <link href="../css/notice.css" type="text/css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="../css/notice.css" type="text/css" media="screen" />   
    <script type="text/javascript" charset="utf-8" src="../scripts/jquery-1.3.min.js"></script>
    <script type='text/javascript' src="../scripts/jquery.dataTables2.js"> </script>
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

	<div id="notice">
		<p class="title"> Notícias</p>
        <div id="acompanhe"> 
        	<p style="width: 180px; margin-top: -7px;  float: left;"> Acompanhe também CONAJE | ENEEJ</p>
            <a href="http://twitter.com/#!/conajeeneej" target="_blank"><img src="../images/a_twitter.png" width="48" height="48"/></a>
            <a href="https://www.facebook.com/conajeeneej" target="_blank"><img src="../images/a_facebook.png" width="48" height="48"/></a>
        </div>
        
		<div id="list_notices">
			<?php require_once("../model/noticias.php");					
				Noticia::show_notices();
				//Noticia::form_add_noticia();
			?>	
		</div>

	</div>
	
</body>

</html>
