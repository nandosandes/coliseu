
<?php
	require_once("../model/video.php");
	
	
	if(isset($_POST['acao']) && $_POST['acao'] == 'cadastrar'){
			
			$titulo = strip_tags($_POST['titulo']);
			$url = strip_tags($_POST['url']);
			$embed = substr($_POST['url'],31,11);
			$foto = "http://i2.ytimg.com/vi/".$embed."/default.jpg";
			$cadastra = $video->cadastra($titulo,$url,$foto,$embed);
			if($cadastra){
				header("Location:../view/admin/admin_videos.php");
				
			}
			else
			   die("Erro").mysql_error();
	
    }
	else{
		switch($_GET['action']){
			case 'del':
				$id = $_GET['id'];
				$video->delete($id);
				header("Location:../view/admin/admin_videos.php");
			break;
			
			/*case 'edit':
				
			break;*/
			
			default:
			break;
			
		}	
	}
	/*else if(isset($_GET['id'])){
		
		$id = $_GET['id'];
		$video->delete($id);
		header("Location:../view/admin/admin_videos.php");
		
		
	}	*/
	
	

	
										  
?>
