<?php
require_once 'database.php';

Class Foto{

	protected static $db_fields = array ('titulo', 'foto','descricao');

	public static $table_name = "eneej_fotos";
	public $id;
	public $titulo;
	public $descricao;
	public $foto;

	public $target_path;
	private $temp_path;
	protected $upload_dir="../images/galeria/";
	public $errors=array();
	 
	protected $upload_errors = array(
	UPLOAD_ERR_OK 		=> "Não há erros.",
	UPLOAD_ERR_INI_SIZE  	=> "Tamanho maximo ultrapassado",
	UPLOAD_ERR_FORM_SIZE 	=> "Forma maxima ultrapassada.",
	UPLOAD_ERR_PARTIAL 	=> "Upload parcial.",
	UPLOAD_ERR_NO_FILE 	=> "Nenhum arquivo.",
	UPLOAD_ERR_NO_TMP_DIR => "Nenhuma diretorio temporario.",
	UPLOAD_ERR_CANT_WRITE => "Não foi possivel enviar para o disco.",
	UPLOAD_ERR_EXTENSION 	=> "Upload parou por extensão."
	);
	
	
	public function formGaleria(){
		?>
					<form action
					
					
					="../../controller/foto.php" method="POST" enctype="multipart/form-data" >
						<table>
							<tr>
								<th>
									<label for='titulo'>
										<!--<img src='../css/images/form_nome.png' width='52' height='17' />-->
										Titulo:
									</label>
								</th>
								<td>
									<div id='input_titulo'>
										<input type='text' name='titulo' id='titulo'/>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<label for="file_upload">
										<!--<img src='../css/images/form_mensagem.png' width='96' height='24' />-->
										Imagem: 
									</label>
								</th>
								<td>
									
										<input type="hidden" name="MAX_FILE_SIZE" value="16777215">
										<input type="file" name="file_upload" id="file_upload">
									
								</td>
							</tr>
							<tr>
							<th>
								<label for='comentario'>
									<!--<img src='../css/images/form_mensagem.png' width='96' height='24' />-->
									Coment&aacute;rio:
								</label>
							</th>
								<td>
									<div>
										<textarea name='descricao' id='comentario' cols='42' rows='5' ></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>	
									<input class="input_style_enviar" type="submit" value="Enviar" name="submit"/>
								</td>
							</tr>
						</table>
					</form>
					<?php
			}
		
	
			public function enviar_arquivo($foto) {
				
				if(!$foto || empty($foto) || !is_array($foto)) {
				  	
					  $this->errors[] = "Nenhum arquivo encontrado.";
					  return false;
				} elseif($foto['error'] != 0) {
				  
					  $this->errors[] = $this->upload_errors[$foto['error']];
					  echo $foto['error'];
					  return false;
				} else {
					
						$this->foto  	 = $_FILES['file_upload']['name'];
						$this->titulo    = $_POST['titulo'];
						$this->descricao = $_POST['descricao'];

						return true;
	
				}
			}
		  
			public function save() {
	
				if(isset($this->id)) {
					
					$this->update();
				} else {
					
				  if(!empty($this->errors)) {	
					  return false; 
					  }
	
					$this->temp_path = $_FILES['file_upload']['tmp_name'];
					
					/*if(strlen($this->caption) > 255) {
						$this->errors[] = " A legenda sÃ³ pode conter 255 caracteres.";
						return false;
					}*/
				
				 
				  if(empty($this->foto) || empty($this->temp_path)) {
						$this->errors[] = "O local do arquivo não está disponivel.";
						return false;
				  }
					
					
				  $this->target_path = "../images/galeria/".$this->foto;
				  
						 
				  if(file_exists($this->target_path)) {
						$this->errors[] = "O arquivo {$this->foto} j&aacute; existe.";
						return false;
				  }
				
					
					if(move_uploaded_file($this->temp_path, $this->target_path)) {
						/*$this->path = $this->target_path;
						
						list($largura,$altura)=@getimagesize($this->target_path);						
						if($largura>502 || $altura>502)		
							$this->image_resize();
						if($this->create()) {						
							unset($this->temp_path);
							return true;
						}
						*/
						
						if($this->create()) {
							
							unset($this->temp_path);
							return true;
						}
					} else {
					
					$this->errors[] = "O upload do arquivo falhou.";
					return false;
					}
				}
			}
			
			public function destroy() {
				
				if($this->delete()) {
					
					$target_path = "../images/galeria/".$this->foto;
					return unlink($target_path) ? true : false;
				} else {
					return false;
				}
			}
			
			public function image_path() {
				return "../images/galeria/".$this->foto;
				 
			}
			
			public function size_as_text() {
				if($this->size < 1024) {
					return "{$this->size} bytes";
				} elseif($this->size < 1048576) {
					$size_kb = round($this->size/1024);
					return "{$size_kb} KB";
				} else {
					$size_mb = round($this->size/1048576, 1);
					return "{$size_mb} MB";
				}
			}
		

	//Database
	
	public static function find_by_tipo($tipo="") {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE tipo='{$tipo}' ");
		return $result_array;
	}

	public function authenticate($user,$senha) {
		$sql = "SELECT * FROM ".self::$table_name." ";
		$sql .= "WHERE user='{$user}' AND senha='{$senha}' LIMIT 1";
		$user = self::find_by_sql($sql);
		return empty($user) ? false : array_shift($user);
	}

	public static function find_all() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ");
		return $result_array;
	}

	public static function find_by_id($id=0) {
		$users = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");
		return empty($users) ? false : array_shift($users);
	}

	public static function find_by_sql($sql="") {
		global $database;
		$query = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($query)){
			$object_array[] = self::instantiate($row);
		}
		return $object_array;
	}


	public static function instantiate($record) {
		$object = new self;
		foreach ($record as $attribute => $value) {
			if($object->has_attribute($object,$attribute) ) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}

	private function has_attribute($object,$attribute) {
		$attributes = get_object_vars($object);
		return array_key_exists($attribute,$attributes);
	}


	public function create() {
		global $database;
		$attributes = self::sanitized_attributes($this);
		$sql = "INSERT INTO ".self::$table_name." ( ";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ( '";
		$sql .= join("','", array_values($attributes));
		$sql .= "')";
		
		if($database->query($sql)) {
			return true;
		}else echo mysql_error();
	}

	public function update() {
		global $database;
		$attributes = self::sanitized_attributes($this);
		$attributes_pairs = array();
		foreach($attributes as $key=>$value) {
			$attributes_pairs[] = "{$key} = '{$value}'";
		}
		$sql = "UPDATE ".self::$table_name." SET ";
		$sql .= join(" , ",$attributes_pairs);
		$sql .= " WHERE id=$this->id" ;
		if(!$database->query($sql)) {
			echo mysql_error();
		}
	}

	public function delete() {
		global $database;
		$sql = "DELETE FROM ".self::$table_name." WHERE id=$this->id";
		if(!$database->query($sql)) {
			echo mysql_error();
		}
	}

	protected static function attributes($object) {
		$atributtes = array();
		foreach(self::$db_fields as $field) {
			if(property_exists($object,$field)) {
				$atributtes[$field] = $object->$field;
			}
		}
		return $atributtes;
	}

	protected function sanitized_attributes($object) {
		global $database;
		$clean_attributes = array();
		foreach($this->attributes($object) as $key=>$value) {
			$clean_attributes[$key] = $value;
		}
		return $clean_attributes;
	}

}	


?>