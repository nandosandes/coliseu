<?php

require_once("database.php");

class Login {
	
	private $is_logged_in = FALSE;
	private $table = 'eneej_users';
	
	public function __construct() {
		session_start();
		$this->check_login();
	}
		
	public function check_login() {
		if(isset($_SESSION['user_id'])) {
			$this->is_logged_in = true;
		}else{
			$this->is_logged_in = false;
		}
	}
			
	public function login($user_id) {
		$_SESSION['user_id'] = $user_id;
		$_SESSION['login'] = true;
		$this->is_logged = true;
	}
	
	public function logout() {
		unset($_SESSION['login']);
		unset($_SESSION['user_id']);
		$this->is_logged_in = false;
	}
		
	public function is_logged_in() {
		return isset($_SESSION['login']) ? $_SESSION['login'] : false ;
	}
	
	public function but_logout() {
		echo "<a href='../control/logout.php'> LOGOUT </a>";
	}
		
	public function check_user($username,$pass) { 
		global $database;
		$sql = "SELECT * FROM {$this->table} WHERE ";
		$sql .= "(username = '$username' AND ";
		$sql .= "password = '$pass')";
		$query = $database->query($sql);
		if(mysql_num_rows($query)) {
			$row = $database->fetch_array($query);
			$this->login($row['id']);
			return true;
		}
		return false;	
	}
}

$login = new Login();
?>
