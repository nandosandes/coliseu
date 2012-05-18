
<?php
	require_once("../model/video.php");
	
	$id = $_GET['id'];
	$video->delete($id);
	header("Location:../view/admin/admin_videos.php");
	
?>	
