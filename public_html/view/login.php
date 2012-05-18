<?php

require_once('../model/login.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONAJE & ENEEJ </title>
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<!-- <link href="../css/admin.css" type="text/css" rel="Stylesheet"/> -->

</head>

<style>
body{ margin: 0 auto; padding: 0; background: #F2F2F2;}

#content {
	width: auto;
	height: 500px;
	margin: 0 auto;
}
 

#header{
	width: auto;	
	background: url("../images/bg_header.png") white repeat-x;
	height: 144px;
}

#top{
	width: 930px;
	margin: -8px auto;	
	height: 92px;
}

#top_right{
	display: inline;
    float: right;
    height: 76px;
    width: 369px;	
}

#marca {
	background: url("../images/marca.png") no-repeat;	
	width: 482px;
	height: 69px;
	margin: 9px auto;
}

#form-login{
	width: 391px;
	margin: 0 auto;
	height: 450px;
}
#form-login p{
	font-family: 'Cabin Condensed', sans-serif;
	padding: 0;
	margin: 0;
	font-size: 24px;
	margin: 13px 0 4px 10px;
	color: #666;
	text-shadow: 1px 1px 1px #FFF;
}
#form-login input {	
	background: url("../images/bg_input.png") no-repeat;
	border: 0;
	width:391px;
	height: 42px;
	outline: 0;
	font-size: 20px;
	padding: 0px 0px 0px 15px;
	color: #b5b3b3;
	text-shadow: 1px 1px 1px #FFF;
}

#form-login input.submit{
	background: url("../images/bg_submit.png") no-repeat;
	width:391px;
	height: 42px;
	color: #FFF;
	font-size: 25px;
	font-family: 'Cabin Condensed', sans-serif;
	text-shadow: 0 0 0 #FFF;
	margin-top: 10px;
}

.flash_bad{
	font-family: 'Cabin Condensed', sans-serif;
	color: #CC0000;
	text-shadow: 1px 1px 1px #FFF;
	text-align: center;
	font-size: 20px;
}

</style>
<body>
	
	<div id="content">
		
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>

	
		<div id="form-login">
			<?php
			if(isset($_SESSION['flash_notice'])) {
				echo "<div class='flash_bad'>".$_SESSION['flash_notice']."</div>";
				unset($_SESSION['flash_notice']);
			}
			?>
			<form action="../controller/login.php" method="POST" >
				<p>Usuário:</p>
				<input type="text" name="username"><br />
				<p>Senha:</p>
				<input type="password" name="password"><br />
				<input type="submit" value="Entrar" class="submit">
			</form>
		</div>
	</div>
</body>
</html>