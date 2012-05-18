<?php
//classe para upload de imagem

class Uploadjpg {
	var $erro;
	var $imgy;
	var $tamanho;
	var $nometmp;
	var $nome;
	var $tipo;
	var $quali;
	var $novonome;
	var $diretorio;
	var $imgp;
	
	function Uploadjpg(){
    }
	//recebe
	
	//gera imagem
	function Gera($imagem,$quali,$diretorio){
		$this->quali = $quali;
		$this->diretorio = $diretorio;
		$this->imgp = $imagem;	
		$this->tamanho = $imagem['size'];
		$this->nometmp = $imagem['tmp_name'];
		$this->tipo = $imagem['type'];
		$this->nome = $imagem['name'];
					
		if (($this->tipo != 'image/jpeg') && ($this->tipo != 'image/pjpeg') && ($this->tipo != 'image/pNG') && ($this->tipo != 'image/gif') && ($this->tipo != 'image/png') ){
			$this->erro =  'Tipo de arquivo invalido, somente JPG.';
			return false;	
		}elseif($this->tamanho == 0){
			$this->erro =  'Selecione uma imagem.';
			return false;
		}elseif(!file_exists($this->diretorio)){
			$this->erro =  'O diretorio '.$this->diretorio.' nao existe.';
			return false;
		}else{
			//gera a imagem
			//A linha abaixo é para largura proporcional da altura
			//$largura = $tamanhoX * $altura / $tamanhoY; 
			//se deu certo retorna o nome da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $this->imgp['name'], $ext);
			$novonome = $this->nome.".".$ext[1];
			$this->diretorio .= $novonome;
			move_uploaded_file($this->imgp['tmp_name'], $this->diretorio);
			return $this->diretorio;
		}
	}
	
	//retorna erro
	function Erro(){
		return $this->erro;
	}
	//seta nome
	function Setanome($nome){
		$this->novonome = $nome;
	}
	//cria diretorio
	function Criadir($novodir,$chmod){
		if(file_exists($novodir)){
			return false;
		}elseif(!@mkdir($novodir,$chmod)){
			return false;
		}else{
			return true;
		}
	}
}


?>
