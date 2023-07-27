<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php'); 
Session::checkAdminLogin();
include_once ($filepath.'/../lib/Database.php'); 
include_once ($filepath.'/../helpers/Format.php'); 


?>
<?php 

/**
* Adminlogin Class
*/
class AdminLogin{

	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}




	public function adminLogin($data){
	$adminUserName = $this->fm->validation($data['adminUserName']);
	$adminPass 	= $this->fm->validation(md5($data['password']));

	$adminUserName = mysqli_real_escape_string($this->db->link, $adminUserName );
	$adminPass 	= mysqli_real_escape_string($this->db->link, $adminPass );
	if (empty($adminUserName) || empty($adminPass)) {
		$loginmsg = "<div class='alert alert-danger alert-dismissable Cus'>Field must not be empty!</div>";
		return $loginmsg;
	}else{
		$query = "SELECT * FROM admin_tbl where adminUser = '$adminUserName' AND adminPass = '$adminPass'";
		$result = $this->db->select($query);
		if ($result != false) {
			$value = $result->fetch_assoc();
			Session::set("adminlogin", true);
			Session::set("adminUserName", $value['adminUser']);
			header("Location: index.php");

		}else{
			$loginmsg = "<div class='alert alert-danger alert-dismissable Cus'>Username or Password does not match !</div>";
			return $loginmsg;
		}
	}
	}



}

?>