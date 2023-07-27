<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php'); 
Session::checkUserLogin();
include_once ($filepath.'/../lib/Database.php'); 
include_once ($filepath.'/../helpers/Format.php'); 
/**
* User Class
*/
class User{
	
	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function usersLogin($data){
	$tableName = $this->fm->validation($data['tableName']);
	$userPass 	= $this->fm->validation(md5($data['password']));
	$tableName = mysqli_real_escape_string($this->db->link, $tableName );
	$userPass 	= mysqli_real_escape_string($this->db->link, $userPass );
	if (empty($tableName) || empty($userPass)) {
		$loginmsg = "<div class='alert alert-danger alert-dismissable Cus'>Field must not be empty!</div>";
		return $loginmsg;
	}else{
		$query = "SELECT * FROM tables where tableName = '$tableName' AND Password = '$userPass'";
		$result = $this->db->select($query);
		if ($result != false) {
			$value = $result->fetch_assoc();
			Session::set("userlogin", true);
			Session::set("userId", $value['id']);
			Session::set("tableName", $value['tableName']);
			header("Location: index.php");
		}else{
			$loginmsg = "<div class='alert alert-danger alert-dismissable Cus'>Email or Password not match !</div>";
			return $loginmsg;
		}
	}
	}


}
?>