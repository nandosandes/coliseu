<?php require_once("../model/login.php")?>

<?php  
		require_once("../model/noticias.php");
		$id=$_GET['id']; 
		$noticia=Noticia::find_by_id($id);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $noticia->title;?></title>
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<style>
	body{
		margin: 0 auto;
	}

	#noticias {
		width: 940px;
		height: 900px;
		padding-bottom: 100px;
		margin: 0 auto;	
		border-bottom: 3px solid #CCC;
		display: table;
	}
	
	.noticia_titulo{
		font-family: 'Cutive', cursive;
		color: white;
		text-shadow: 1px 2px 1px #004600;
		font-size: 27px;
		width: 600px;
		float :left;
		margin-left: 25px;		
		margin-bottom: 0;	
		padding: 30px 0 0 10px;
	}
	
	#noticias_principal {
		width: auto;
		height: auto;
		margin: 0 auto;
		margin-top: -16px;
	}

	#voltar{
		width: 57px;
		height: 27px;
		float: right;
		background: #96B950;
		margin-right: 37px;
	}
	a.voltar {
		font-family: 'Cabin Condensed' , sans-serif;
		color: white;
		text-decoration: none;
		margin-top: 0;
		font-size: 20px;
		margin-right: 0;
		text-align: center;
		padding: 5px;
	}
	a.voltar:hover {
		text-decoration: underline;	
	}
	
	#espalhe{
		width: 250px;
		height: 40px;
		margin-left: 51px;
		margin-top: 105px;
		margin-bottom: 6px;	
		display: table;
		float: left;
	}
	#recommend{
		float: left;	
		padding-right: 10px;
		margin-top: 3px;
	}
	#plus{
		float: left;
		padding-right: 10px;	
	}
	
	#desc_noticia{
		width: 750px;
		margin: 0 auto;
		text-align: left;
		font-family: 'Cabin Condensed' , sans-serif;
		height: auto;
		color: #5D5D5D;
		margin-left: 37px;
		margin-top: 111px;
	}
	.text_notice{
		width: auto;
		float: margin-left;
		text-align: justify;
	}

	.img_noticia{
		padding: 0;
		border: 3px solid #CCC;
		margin: 0 11px 5px;
	}

	#desc_noticia span{
		width: auto;

	}
	#twitter {
		width: auto;
		height: auto;
		margin-top: 3px;
		float: right;
		margin-right: 41px;
	}
</style>
</head>
<body>
	
        <div id="noticias">
            <p class="noticia_titulo">  <?php echo $noticia->title;?></p>
       	<div id="voltar"><a href="../includes/noticias.php" class="voltar" >Voltar</a></div>
            <div id="espalhe">
            	<div id="twitter">
            		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="ConajeEneej" rel="nofollow" style="margin-top: 3px;">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> </a> 
            	</div>
            	<div id="recommend"> <a name='fb_share' type='button'>Compartilhe</a> </div>
	        		<div id="plus"> 
                		<g:plusone annotation="none"></g:plusone>
	            	</div>
            </div>
  
            <div id="desc_noticia">
            	<p class="text_notice" align="left">  
            	<img src="<?php echo $noticia->photo?>" width='400' height='300' align="left" class="img_noticia"/>
            	<?php echo "<span>". $noticia->text ."</span></p>"?>
            </div>
          
            
          
        </div>

	
</body>
</html>
