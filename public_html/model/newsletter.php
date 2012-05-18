<?php

class Newsletter {
	
	private $table = "eneej_newsletter";
	
	function listar(){
		global $database;
		
		$sql = "SELECT * FROM {$this->table}";
		
		$query = $database->query($sql);
		
		echo "<table>";
		echo "<tr><th>Nome</th><th>Email</th><th>Celular</th></tr>";
		while ($row = $database->fetch_array($query)){
			echo "<tr><td>{$row['nome']}</td><td>{$row['email']}</td><td>{$row['celular']}</td></tr>";
		}
		echo "</table>";
	}
}

$newsletter = new Newsletter();
?>
