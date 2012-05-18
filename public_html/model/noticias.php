<?php

require_once("database.php");

class Noticia {
	
	protected static $db_fields = array('text','title','subtitle','date','photo');
	
	public static $table_name = "eneej_news";
	
	public $id;
	public $text;
	public $title;
	public $subtitle;
	public $date;
	public $photo;
	
	public static function show_last_three(){
		$noticias = self::find_by_sql("SELECT * FROM ".self::$table_name." ORDER BY id DESC LIMIT 2");
		
		foreach ($noticias as $noticia){
?>
			<div class="news_column">
				<div class="notice_title">
					<a href="show_notice.php?id=<?php echo $noticia->id;?>"> 
        		<b><?php echo $noticia->title;?> </b>
        	</a>
				</div>
				<div class="notice_resume">
					<a href="show_notice.php?id=<?php echo $noticia->id;?>"> 
          	<p><?php echo $noticia->subtitle?></p>
          </a>
				</div>
				<a href="show_notice.php?id=<?php echo $noticia->id;?>" class="continue_lendo"> Continue lendo</a>
			</div>
<?php			
		}
	}
	
	public static function show_notices(){ // visualização na pagina principal 
		//######### INICIO Paginação
				$numreg = 3; // Quantos registros por página vai ser mostrado
				if (!isset($pg)) {
						$pg = 0;
						
				}
				$inicial = $pg * $numreg;
				
		//######### FIM dados Paginação
        // Faz o Select pegando o registro inicial até a quantidade de registros para página
        $sql = mysql_query("SELECT * FROM eneej_news LIMIT $inicial, $numreg");

        // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
        $sql_conta = mysql_query("SELECT * FROM eneej_news");   

        
        $quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação
        
        
        
        echo "<br><br>"; // Vai servir só para dar uma linha de espaço entre a paginação e o conteúdo
        
        while ($row = mysql_fetch_array($sql)) {
		?>    
		<tr class="gradeA">
		<div class="notice"> 
            	<div class="img_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"><img src="<?php echo $row['photo'];?>"  width="125" height="94"/></a>  </div>
                <div class="cont_notice"> 
                	<div class="title_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"> <?php echo $row['title'];?> </a></div>
                    <div class="resume_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"> <?php echo $row['subtitle']?></a></div>
                    <a href="../view/show_notice.php?id=<?php echo $row['id'];?>" class="continue_lendo"> Continue lendo</a>
                </div>
                
            </div>
	
	<?php              
      
        }
		include("paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>	
	//$noticias=self::find_all();
	//foreach($noticias as $noticia){
 }	
	
	
public static function form_add_noticia() { 
			date_default_timezone_set('America/Recife');
			$data=date('Y-m-d H:i:s',time());?>	
			

                <br />
            	<form action="../../controller/noticias.php" method="POST" enctype="multipart/form-data">
                <table>
                	<tr>
                    	<th>                       
                            Titulo: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="text" name="title" class="input_style" size="80"/></div>
                        </th>
                    </tr>    
                	<tr>
                    	<th>
                            Subtitulo: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="text" name="subtitle" class="input_style" size="80"/></div>
                        </th>
                    </tr>
                    
                    <tr height="30px"></tr>
                	<tr>
                    	<th>
                           Foto: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="file" name="photo" id="photo" class="input_style" size="80"/></div>
                        </th>
                    </tr>
                    
                    <tr height="30px"></tr>                  
                    <tr>
                        <input type="hidden" name="action" value="add" />
                        <input type="hidden" name="date" value="<?php echo $data;?>">
                    </tr>
                    <tr>
                    	<th>Corpo: </th>
                        <th><textarea name="text" cols="60" rows="14"></textarea></th>
                    </tr>
                </table>
                <br />
                <br />
                <input type="submit" value="ADICIONAR" class="input_style" />
            </form>
	<?php }
	
	public function form_edit_noticia($id) { 
	$noticia=self::find_by_id($id);
	date_default_timezone_set('America/Recife');
	$data=date('Y-m-d H:i:s',time());?>	
	
     

                <br />
                <br />
            	<form action="../../controller/noticias.php" method="POST" enctype="multipart/form-data">
                <table>
                	<tr valign="middle">
                    	<th valign="middle">                       
                            Titulo: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="text" value="<?php echo $noticia->title ?>" name="title" class="input_style" size="74"/></div>
                        </th>
                    </tr>    
                	<tr valign="middle">
                    	<th valign="middle">
                            Subtitulo: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="text" value="<?php echo $noticia->subtitle ?>" name="subtitle" class="input_style" size="74"/>				</div>
                        </th>
                    </tr>
                    <tr height="30px"></tr>
 
                 	<tr valign="middle">
                    	<th valign="middle">
                            Foto: &nbsp;&nbsp;
                    	</th>
                        <th>
                        	<div class="input_text_big"><input type="file" name="photo" id="photo" class="input_style" size="80"/></div>
                        </th>
                    </tr>
                    <tr height="30px"></tr>                   
                    <tr height="30px">
                    <input type="hidden" name="action" value="edit" />
                     <input type="hidden" name="id" value="<?php echo $noticia->id?>" />
                     <input type="hidden" name="date" value="<?php echo $data?>" />                   
                    </tr>
                    <tr height="30px">
                    	<th>Corpo: </th>
                        <th><textarea name="text"></textarea></th>
                    </tr>
                    </table>
                    <br />
                    <br />
                   <input type="submit" value="EDITAR" class="input_style" />
                </form> 
	<?php }

	
	public static function show_notices2() { // Visualização pelo administrador do sistema
		?>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" enctype='multipart/form-data'>
        <thead>
            <tr>
                <th>Titulo</th>
               
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
		<?php
		$noticias = self::find_all();
		foreach($noticias as $noticia) {
			echo "<tr class='gradeA'>";
				echo "<td class='center'>";
				echo $noticia->title;
				echo "</td>";
				echo "<td class='center'>";
				echo "<a href='edit_noticias.php?id=$noticia->id'><div class='edit'>EDITAR</div></a>";
				echo "</td>";
				echo "<td class='center'>";
				echo "<a href='../../controller/delete_noticias.php?id={$noticia->id}'><div class='delete'>DELETAR</div></a>";
				echo "</td>";
			echo "</tr>";
			}
		?>
        </tbody>
           <tfoot>
               <tr>
                    <th>Titulo</th>
                	<th>Editar</th>
                    <th>Apagar</th>
                </tr> 
            </tfoot> 
        </table>
        <?php
	}
	public static function show_notices3() { ?>
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" enctype='multipart/form-data'>
        <thead>
            <tr>
                <th></th>
               
            </tr>
        </thead>
        <tbody>
		<?php
		$noticias = self::find_all();
		foreach($noticias as $noticia) {
			echo "<tr class='gradeA'>";
				echo "<td class='center'>";
				echo "<img src='$noticia->photo' width='120px' height='120px'>";
				echo "</td>";
				echo "<td class='center'>";
				echo "<div class='title_notice'>$noticia->title</div>";
				echo "</td>";
				echo "<td class='center'>";
				echo "<div class='resume_notice'>$noticia->subtitle</div>";
				echo "</td>";
			echo "</tr>";

			}
		?>
        </tbody>
           <tfoot>
               <tr>
                   <th></th>
                </tr> 
            </tfoot> 
        </table>
        <?php
	}

	
	public function show_noticia_delete() { ?>
		<div id="delete_notice">

            <br />
            <form action="../../controller/noticia.php?id=<?php echo $this->id ?>" method="POST">
            <br />
            <p><b><?php echo $this->titulo ?> </b></p>
            <br />
            <p><?php echo $this->subtitulo ?></p>
            <br />
            <br />
            <input type="hidden" value="delete" name="action"/>
            <input type="submit" value="DELETE" class="input_style_but"/>
            </form>
            <a href="admin_noticias.php"><div class="but_nao"></div></a> 
        </div>
   		<?php }

			
	public static function show_notices_home() { ?>

        	<?php
			$noticias = self::find_all2();
			foreach($noticias as $noticia) { 
				$data = $noticia->data;
				$data_nova = date('d/m/Y', strtotime($data)); 
			?>
            
            			<div class="noticia_home">
                            <div class="content_notice">
                                <div class="noticia_date"><?php echo $data_nova ?></div>
                                
								<a href="view_noticia.php?id=<?php echo $noticia->id?>"><div class='noticia_title'><?php echo $noticia->titulo?> </div></a>
								                                
                                <div class="noticia_subtitle"><?php echo $noticia->subtitulo ?></div>
                     		</div>
                        </div>

<?php            }
	}


		
//  ---   DATABASE OBJECT  ---  //

	public static function find_all_page() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ORDER BY id DESC LIMIT 3");
		return $result_array;
		}
		
	public static function find_all() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ");
		return $result_array;
		}
	
	public static function find_by_id($id=0) {
		$users = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");
		return empty($users) ? false : array_shift($users);
		}
		public static function find_all2() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ORDER BY id DESC LIMIT 3");
		return $result_array;
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
		if(!$database->query($sql)) {
			echo mysql_error();
			}
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
