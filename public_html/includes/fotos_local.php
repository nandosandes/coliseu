<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeria de fotos local</title>
<link type="text/css" href="../css/pikachoose.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.pikachoose.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
				});
		</script>
</head>

<body scroll="no">
	<ul id="pikame" class="jcarousel-skin-pika">
		<li><img src="../images/local_cc.jpg.png"> <span> Centro de Convenções</span></li>
  		<li><img src="../images/local_cc2.jpg.png"> <span> Centro de Convenções</span></li>
        <li><img src="../images/local3.jpg"> <span> Baía de todos os santos</span></li>
        <li><img src="../images/local4.jpg"> <span> Farol da Barra</span></li>
        <li><img src="../images/local5.jpg"> <span> Pelourinho</span></li>
	</ul>


</body>
</html>
