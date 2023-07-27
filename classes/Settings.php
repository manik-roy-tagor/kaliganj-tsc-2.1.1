<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
/**
* Payment Class
*/
class Settings{
	
	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

/* Payment */
public function SettingsCreated($data){
	$post_type        = "about_us";	
	$post_title = $this->fm->validation($data['post_title']);
	$post_title = mysqli_real_escape_string($this->db->link,$post_title);
	$descrip = $this->fm->validation($data['descrip']);
	$descrip = mysqli_real_escape_string($this->db->link,$descrip);
if ($post_title = '' || $descrip = '') {
	$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Fields must not be empty.</div>";
	return $msg;
}else{
	$query = "INSERT INTO additional_setting(post_type,post_title,post_desc,isActive) VALUES('$post_type','post_title','descrip',1)";
	$result = $this->db->insert($query);
	return $result;
}



}




	
}
?>