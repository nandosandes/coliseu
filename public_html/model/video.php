<?php

require_once("database.php");
class Video{
	
	public static $table_name = "eneej_videos";
	public $titulo;
	public $url;
	private $foto;
	private $embed;
	public $id;
	
	public function cadastra($titulo,$url,$foto,$embed){
		
		$result = mysql_query("INSERT INTO eneej_videos (titulo,url,foto,embed) VALUES ('$titulo','$url','$foto','$embed')");
		return $result;
	}	
	
	public static function show_notices() {
		?>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
		<?php
		$noticias = self::find_all();
		foreach($noticias as $noticia) { 
				$data = $noticia->data;
				$data_nova = date('d/m/Y', strtotime($data)); 
			?>
            	<tr>
                	<td>
            			<div class="noticia_home_int">
                            <div class="content_notice">
                                <div class="noticia_date"><?php echo $data_nova ?></div>
                                <?php
								echo "<a href='view_noticia.php?id={$noticia->id}'><div class='noticia_title_int'>{$noticia->titulo}</div></a>";
								?>
                                
                                <div class="noticia_subtitle"><?php echo $noticia->subtitulo ?></div>
                     		</div>
                        </div>
                     </td>
                 </tr>
				<?php
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
	
	
	public static function show_videos() {
		?>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" enctype='multipart/form-data'>
        <thead>
            <tr>
                <th>Titulo</th>
               
                <th>Ver</th>
                <!--<th>Editar</th>-->
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
		<?php
		$videos = self::find_all();
		foreach($videos as $video) {
			echo "<tr class='gradeA'>";
				echo "<td>";
				echo $video->titulo;
				echo "</td>";
				echo "<td class='center'>";
				echo "<a href='$video->url' target = '_blank'><div class='view'> VER </div></a>";
				echo "</td>";/*
				echo "<td class='center'>";
				echo "<a href='admin_videos.php?id=$video->id&titulo=$video->titulo&url=$video->url'><div class='edit'>EDITAR</div></a>";
				echo "</td>";*/
				echo "<td class='center'>";
				echo "<input type='hidden' name='acao' value='deletar'>";
				echo "<a href='../../controller/video.php?id=$video->id&action=del'><div class='delete'>DELETAR</div></a>";
				echo "</td>";
			echo "</tr>";
			}
		?>
        </tbody>
           <tfoot>
               <tr>
                    <th>Titulo</th>
                    <th>Ver</th>
                	<!--<th>Editar</th>-->
                    <th>Apagar</th>
                </tr> 
            </tfoot> 
        </table>
        <?php
	}
	
	public function show_noticia_delete() { ?>
		<div id="delete_notice">

            <br />
            <form action="../../controller/video.php?id=<?php echo $this->id ?>" method="POST">
            <br />
            <p><b><?php echo $this->titulo ?> </b></p>
            <br />
            <p><?php echo $this->subtitulo ?></p>
            <br />
            <br />
            <input type="hidden" value="delete" name="action"/>
            <input type="submit" value="DELETE" class="input_style_but"/>
            </form>
            <a href="admin_videos.php"><div class="but_nao"></div></a> 
        </div>
   		<?php }
	
	public function delete($id) {
		global $database;
		$sql = "DELETE FROM ".self::$table_name." WHERE id=$id";
		if($database->query($sql)){
			header("Location:../view/admin_videos.php");
			}
		else
			echo mysql_error();
		}
		
	public function edit($titulo,$url,$id){
		global $database;
		$sql = "UPDATE ".self::$table_name."SET titulo='$titulo' url='$url'  VALUES() WHERE id=$id";
		
		
		
	}			
	public static function show_notices_home() {?> 

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

<?php     }       
	}

	/*////// DATABASE ////// */
	
	public static function find_all() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ");
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
	
}

$video = New Video;
?>
