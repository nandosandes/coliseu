<?php

include("database.php");

class Inscrito {

	private static $db_fields = array(
		'name','name_cracha','email','pass','birth','genero','tshirt','country','cpf','passport','estado','cidade','phone','type','empresa','cargo','segmento','federacao','ej','cargo_jr','tempo','date','confirm','cep','bairro','rua','numero','complemento','celular','codigo','tipo'
	);
	
	private static $date;
	public $id;
	public $name;
	public $name_cracha;
	public static $email;
	public $pass;
	public $birth;
	public $genero;
	public $tshirt;
	public $country;
	public $cpf;
	public $passport;
	public $estado;
	public $cidade;
	public $phone;
	public $type;
	public $empresa;
	public $cargo;
	public $segmento;
	public $federacao;
	public $ej;
	public $cargo_jr;
	public $tempo;
	public $confirm;
	public $cep;
	public $bairro;
	public $rua;
	public $numero;
	public $complemento;
	public $celular;
	public $codigo;
	public $tipo;
	public static $table_name = "inscricoes_inscritos";
	

	public static function inscrever($post,$tipo){
		self::$date =  date("Y-m-d H:i:s");
		global $database;
		$codigo=md5($_POST['email']);
		if($tipo == "cpfsenior"){
			$sql = "INSERT INTO ".self::$table_name. " (name,name_cracha,email,pass,birth,genero,tshirt,country,cpf,estado,cidade,phone,type,empresa,cargo,segmento,date,confirm,cep,bairro,rua,numero,complemento,celular,codigo) VALUES ('{$post['name']}','{$post['name_cracha']}','{$post['email']}','{$post['pass']}','{$post['birth']}','{$post['genero']}','{$post['tshirt']}','{$post['country']}','{$post['cpf']}','{$post['estado']}','{$post['cidade']}','{$post['phone']}','{$post['type']}','{$post['empresa']}','{$post['cargo']}','{$post['segmento']}','".self::$date."','false','{$post['cep']}','{$post['bairro']}','{$post['rua']}','{$post['numero']}','{$post['complemento']}','{$post['cel_phone']}','".$codigo."')";
		}
		
		if($tipo == "cpfjunior"){
			$sql = "INSERT INTO ".self::$table_name. " (name,name_cracha,email,pass,birth,genero,tshirt,country,cpf,estado,cidade,phone,type,federacao,ej,cargo_jr,tempo,date,confirm,cep,bairro,rua,numero,complemento,celular,codigo) VALUES ('{$post['name']}','{$post['name_cracha']}','{$post['email']}','{$post['pass']}','{$post['birth']}','{$post['genero']}','{$post['tshirt']}','{$post['country']}','{$post['cpf']}','{$post['estado']}','{$post['cidade']}','{$post['phone']}','{$post['type']}','{$post['federacao']}','{$post['ej']}','{$post['cargo_jr']}','{$post['tempo']}','".self::$date."','false','{$post['cep']}','{$post['bairro']}','{$post['rua']}','{$post['numero']}','{$post['complemento']}','{$post['cel_phone']}','".$codigo."')";
		}
		
		if($tipo == "passaportesenior"){
			$sql = "INSERT INTO ".self::$table_name. " (name,name_cracha,email,pass,birth,genero,tshirt,country,cpf,estado,cidade,phone,type,empresa,cargo,segmento,date,confirm,cep,bairro,rua,numero,complemento,celular,codigo) VALUES ('{$post['name']}','{$post['name_cracha']}','{$post['email']}','{$post['pass']}','{$post['birth']}','{$post['genero']}','{$post['tshirt']}','{$post['country']}','{$post['passport']}','{$post['estado']}','{$post['cidade']}','{$post['phone']}','{$post['type']}','{$post['empresa']}','{$post['cargo']}','{$post['segmento']}','".self::$date."','false','{$post['cep']}','{$post['bairro']}','{$post['rua']}','{$post['numero']}','{$post['complemento']}','{$post['cel_phone']}','".$codigo."')";
		}
		
		if($tipo == "passaportejunior"){
			$sql = "INSERT INTO ".self::$table_name. " (name,name_cracha,email,pass,birth,genero,tshirt,country,cpf,estado,cidade,phone,type,federacao,ej,cargo_jr,tempo,date,confirm,cep,bairro,rua,numero,complemento,celular,codigo) VALUES ('{$post['name']}','{$post['name_cracha']}','{$post['email']}','{$post['pass']}','{$post['birth']}','{$post['genero']}','{$post['tshirt']}','{$post['country']}','{$post['passport']}','{$post['estado']}','{$post['cidade']}','{$post['phone']}','{$post['type']}','{$post['federacao']}','{$post['ej']}','{$post['cargo_jr']}','{$post['tempo']}','".self::$date."','false','{$post['cep']}','{$post['bairro']}','{$post['rua']}','{$post['numero']}','{$post['complemento']}','{$post['cel_phone']}','".$codigo."')";
		}

		if(!$database->query($sql)){			
			echo mysql_error();
			return mysql_error();
		}
		// seta a session para aparecer na index
		$_SESSION['mensagem']="Aguarde seu email";
		
		header("Location: ../views/index.php");
	}
	
	public static function mandar_email($mail){
		 $data= self::$date;
		 $codigo=md5($mail);
		 $msn = 
			 "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing s
			 <br/>	oftware like Aldus PageMaker including versions of Lorem Ipsum.
			 <br/><br/>
			 <a href='http://www.infojr.com.br/~eneej/inscricoes/views/inscrito.php?email=$mail&&codigo=$codigo'>Confirmar Inscrição</a>
			 <br/>
			 Enviado em: $data;
			 ";
		
		$assunto = 'Inscricao ENEEJ';
		$header = "MIME-Version: 1.0\n"; 
		$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$header .= "From: email_remetente@dominio.com\n";
		 
		 mail($mail,$assunto,$msn,$header);
		 
		 
	 
	}
	
	public static function confirma_cadastro($codigo,$mail) {
		global $database;
		$data =  date("Y-m-d H:i:s");
		$sql = "UPDATE ".self::$table_name. " SET confirm='1' WHERE codigo='".$codigo."'";
		if(!$database->query($sql)){			
			echo mysql_error();
			return mysql_error();
		}
		
		$msn = 
			 "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing s
			 <br/>	
			 <br/><br/>
			 <b> Parabéns você foi inscrito no evento!</b>
			 <br/>
			 Enviado em: $data;
			 ";
		
		$assunto = 'Incrição Concluida';
		$header = "MIME-Version: 1.0\n"; 
		$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$header .= "From: email_remetente@dominio.com\n";
		 
		 mail($mail,$assunto,$msn,$header);
		 // mensagem de cadastro finalizado
		 $_SESSION['mensagem']="Cadastro Confirmado!";
		 header("Location: ../views/index.php");
		
	}	
	
	public static function email_cadastrado($email){
		
		global $database;
		$sql = "SELECT email FROM ".self::$table_name." WHERE email='{$email}' LIMIT 1";
		
		return $query = $database->query($sql);
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
}

?>
