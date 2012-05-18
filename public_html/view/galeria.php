<?php
require_once '../model/database.php';

?>
<html>
<header>
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="../js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

</header>

<body><!--  
	<h2>Imagens</h2>
	
	<?php/*
 	$query = $database->query("SELECT * FROM eneej_fotos");
 	
	While($row = $database->fetch_array($query)){
	?>	
	<a href="../images/galeria/<?php echo $row['foto']; ?>" rel="prettyPhoto[pp_gal]" title="<?php echo $row['titulo']; ?>"><img src="../images/galeria/<?php echo $row['foto']; ?>" width="120" height="80" alt="Red round shape" /></a>
	
	<?php } */?>-->
	<!--  <h2>Videos</h2>-->	
	
	<a href="http://www.youtube.com/watch?v=25TZMZoJv14&feature=g-all&context=G2056ebaFAAAAAAAAVAA" rel="prettyPhoto[pp_gal]"><img src="http://www.youtube.com/watch?v=25TZMZoJv14&feature=g-all&context=G2056ebaFAAAAAAAAVAA" width="120" height="80" alt="Rock climbing" /></a>
	

</body>
</html>                	