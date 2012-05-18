<?php require_once("../model/login.php");
require_once("../model/noticias.php");
require_once("../model/imagem.php");
	  if(!$login->is_logged_in()) {
		header("location: index.php");	
	}

$noticia = new Noticia;
$diretorio = '../css/images/fotos_noticias/';

$envia = new Uploadjpg;

switch($_POST['action']){
	case "add":
		$noticia ->title = mysql_real_escape_string($_POST['title']);
		$noticia ->subtitle = mysql_real_escape_string($_POST['subtitle']);
		$noticia ->text =$_POST['text'];
		$noticia->date=$_POST['date'];
		$foto = $envia->Gera($_FILES['photo'],182,$diretorio);	
		if(!$foto){
			$_SESSION['erro_foto'] = "Erro no upload da imagem";
		}else{
			$noticia->photo = $envia->diretorio;
		}		
		$noticia->create();
		$_SESSION['wrong_login'] = "Noticía Cadastrada com Sucesso!";
		header("location: ../view/admin/admin_noticias.php");	
			
	break;
	
	case"edit":
		echo $_POST['text'];
		$noticia->id =$_POST['id'];
		$noticia ->title = mysql_real_escape_string($_POST['title']);
		$noticia ->subtitle = mysql_real_escape_string($_POST['subtitle']);
		$noticia ->text = $_POST['text'];
		if($_FILES['photo']and $_FILES['photo']['name']<>"" ) {
			if( file_exists( $noticia->photo ) ) {
				unlink($noticia->photo );
			}
				$foto = $envia->Gera($_FILES['photo'],182,$diretorio);	
			if(!$foto){
				$_SESSION['erro_foto'] = "Erro no upload da imagem";
			}else{
			$noticia->photo = $envia->diretorio;
			}
		}
		$noticia ->date = mysql_real_escape_string($_POST['date']);
		$noticia->update();
		$_SESSION['wrong_login'] = "Noticía Alterada com Sucesso!";
		header("location: ../view/admin/admin_noticias.php");	
	
	break;	
	
	case"delete";
		$id = $_GET['id'];
		$noticia2=Noticia::find_by_id($id);
		$noticia2->delete();
	header ("location:../view/adminNoticia.php?type=b03");
		
	break;

}

?>
