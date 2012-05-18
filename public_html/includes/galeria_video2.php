<?php
	require_once("../model/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CNJLE & ENEEJ </title>
<script src="../js/jqueryvideo.js"></script>
<link rel="stylesheet" type="text/css" href="../css/video.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/jcarouselvideo.js"></script>
	<script type="text/javascript">
			$(function(){
			   $("#carrosel").jCarouselLite({
				 btnNext: ".next",
				 btnPrev: ".prev",
				 visible:4,
				 auto: 5000,
				 speed: 2000
			   })
			})
		</script> 
<!--        
<style>

*{
	margin:0 auto;
	padding:0;
}


#content{
	width:550px;
	height:650px;
}
.prev{
	float:left;
	margin-top:415px;
	margin-left:10px;
}
.next{
	float:left;
	margin-top:415px;

}
/* galeria de video*/

#box{
 width:455px;
 margin:20px auto;
 background:;
 padding:3px;
 float:left;

 
}
#box #videos{
 width:455px;
 height:338px;
 background:;
}
#box #carrosel{
 height:130px;
 width:445px;
 background:;
 margin-top:3px;
}
#box #carrosel img{
 margin:2px;
 padding:2px;
 border:1px solid #ccc;
}
#box #carrosel img:hover{background:#fff;};




</style>-->
</head>	
	
	<div id="content">
		<button  class="prev"></button>
		<div id="box">
			<div id="videos">
					<?php if(!isset($_GET['video'])){
						$selUltimo = mysql_query("SELECT * FROM eneej_videos ORDER BY id DESC");
						$qr = mysql_fetch_array($selUltimo);
						echo '<iframe title="'.$qr['titulo'].'" width="437px" height="338px" src="http://www.youtube.com/embed/'.$qr['embed'].'&amp;wmode=Opaque'.'"frameborder="0" allowfullscreen></iframe>';
					   }
					   elseif(isset($_GET['video'])){
						   $get = $_GET['video'];
						   $selVideo = mysql_query("SELECT * FROM eneej_videos WHERE id = '$get'");
						   $qrdois = mysql_fetch_array($selVideo);
						   echo '<iframe title="'.$qrdois['titulo'].'" width="450px" height="338px" src="http://www.youtube.com/embed/'.$qrdois['embed'].'&amp;wmode=Opaque'.'"frameborder="0" allowfullscreen></iframe>';
						}
					?>
				
			</div>
			<div id="carrosel">
					<?php require_once("../controller/galeria_video.php");?>				
			</div>
		
		</div>
		<button class="next">></button>
	</div>

</body>
</html>

