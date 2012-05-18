
<?php
	require_once("../model/video.php");
	
	$selthumb = $database->query("SELECT * FROM eneej_videos ORDER BY id DESC");
	while($Inthumb = mysql_fetch_array($selthumb)){  
?>
	<ul>
		<li><a href="galeria_video?video=<?php echo $Inthumb['id'];?>"><img src="<?php echo $Inthumb['foto'];?>" /></a></li>
	</ul>
	<?php
	}
	?>
