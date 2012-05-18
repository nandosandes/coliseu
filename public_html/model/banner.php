<?php

require_once('database.php');

class Banner {

	private $erro;
	private $imgy;
	private $tamanho;
	private $nometmp;
	private $nome;
	private $tipo;
	private $quali;
	private $novonome;
	private $diretorio;
	private $imgp;
	private $table = "eneej_banner";

	function deleteBanner($banner_escolhido){
		global $database;
		
		echo $sql = "DELETE FROM {$this->table} WHERE id={$banner_escolhido}";
		
		$database->query($sql);
	}
	
	function chooseBanner(){
	
		$banners = self::find_pictures("SELECT * FROM {$this->table} LIMIT 3");

		echo "<form action='../../controller/banner.php?n={$_GET['n']}' method='post'>";
		
		for($i=0; $i<3; $i++){
			echo "<input type='checkbox' name='choose_one{$i}' />";
			$banner = "../".$banners[$i]['picture'];
			$id = $banners[$i]['id'];
			echo "<img src='{$banner}' width='400' height='100'/><br/>";
			echo "<input type='hidden' name='id{$i}' value='{$id}' />";
		}
		
		echo "<input type='submit' value='Enviar'/>";
		echo "</form>";
	}
	
	function createImagem($imagem,$quali,$diretorio){
		
		global $database;
		
		$this->quali = $quali;
		$this->diretorio = $diretorio;
		$this->imgp = $imagem;	
		$this->tamanho = $imagem['size'];
		$this->nometmp = $imagem['tmp_name'];
		$this->tipo = $imagem['type'];
		$this->nome = $imagem['name'];
					
		if (($this->tipo != 'image/jpeg') && 
				($this->tipo != 'image/pjpeg') && 
				($this->tipo != 'image/pNG') && 
				($this->tipo != 'image/gif') && 
				($this->tipo != 'image/png') )
		{
			echo 'Tipo de arquivo invalido, somente JPG.';
			return false;
		}
		
		if($this->tamanho == 0){
			echo 'Selecione uma imagem.';
			return false;
		}
		
		if(!file_exists($this->diretorio)){
			echo 'O diretorio '.$this->diretorio.' nao existe.';
			return false;
		}
		
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $this->imgp['name'], $ext);
		$novonome = $this->nome.".".$ext[1];
		$this->diretorio .= $novonome;
		move_uploaded_file($this->imgp['tmp_name'], $this->diretorio);

		$database->query("INSERT INTO {$this->table} (picture) VALUES ('{$this->diretorio}')");
		$_SESSION["flash_notice"] = "Upload feito com sucesso";

	}
	
	function erro(){
		return $this->erro;
	}

	function setaNome($nome){
		$this->novonome = $nome;
	}

	function criaDirerotio($novodir,$chmod){
		if(file_exists($novodir)){
			return false;
		}elseif(!@mkdir($novodir,$chmod)){
			return false;
		}else{
			return true;
		}
	}
	
	function showImages(){

		$paths = self::find_pictures("SELECT * FROM {$this->table} LIMIT 3");
		
	?>
		<ul class="slides">
			<li> <img src="<?php echo $paths[0]['picture'] ?>" /> </li>
      
      <li> <img src="<?php echo $paths[1]['picture'] ?>" /> </li>
      
      <li> <img src="<?php echo $paths[2]['picture'] ?>" /> </li>
		</ul>
	<?php
	}
	
	public static function find_pictures($sql = "") {		
		global $database;

		$query = $database->query($sql);
		$paths = array();
		$picture = array();
		
		while ($row = $database->fetch_array($query)){
			$picture = $row;
			$paths[] = $picture;
		}
		
		return $paths;
	}

}

$image = new Banner();
?>
