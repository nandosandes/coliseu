<?php

class Database {
	
	private $db_name = "eneej";
	private $username = "eneej";
	private $password = "SSTRRnnEis";
	private $connection;
	
	
	public function __construct() {
		$this->open_connection();
	}
	
	public function open_connection() {
		if($this->connection = mysql_connect("localhost",$this->username,$this->password)) {
			$select_db = mysql_select_db($this->db_name,$this->connection);
			if($select_db){
				return true;
			}else{
				die("Database selection failed! ".mysql_error());
			}
		}		
	}

	
	public function query($sql="") {
		$query = mysql_query($sql);
		return $query;
	}
	

	public function fetch_array($query) {
		$fecth = mysql_fetch_array($query);
		return $fecth;
	}

	
	public function is_connected() {
		return ($this->connection == NULL) ? false : true;
	} 
		
}

$database = new Database();

?>
