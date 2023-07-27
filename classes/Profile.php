<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php'); 
include_once ($filepath.'/../helpers/Format.php'); 

?>
<?php 

/**
* Profile Class
*/
class Profile{
	
	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

/*public function getAllUserProfile(){
	$query = "SELECT * FROM tbl_profile ORDER BY profileId DESC";
	$result = $this->db->select($query);
	return $result;
}



public function getProfileById($ReaderId){
	$query = "SELECT * FROM tblstudents WHERE ReaderId = '$ReaderId'";
	$result = $this->db->select($query);
	return $result;
}
public function profileUpdate($profileName, $id){
	$profileName = $this->fm->validation($profileName);
	$profileName = mysqli_real_escape_string($this->db->link,$profileName);
	$id = mysqli_real_escape_string($this->db->link,$id);
	if (empty($profileName)) {
		$msg = "<span class='error'>profileegory field must not be empty !</span>";
		return $msg;
	}else{
		$query = "UPDATE tbl_profileegory SET profileName = '$profileName' WHERE profileId = '$id'";
		$result = $this->db->update($query);
		if ($result) {
			$msg = "<span class='success'>profileegory Updated Successfully!</span>";
		return $msg;
		}else{
			$msg = "<span class='error'>profileegory Not Updated!</span>";
		return $msg;
		}
}
}

public function delprofileById($id){
	$query = "DELETE FROM tbl_profileegory WHERE profileId = '$id'";
	$deledata = $this->db->delete($query);
	if ($deledata) {
		$msg = "<span class='success'>profileegory Deleted Successfully!</span>";
		return $msg;
	}else{
		$msg = "<span class='error'>profileegory Not Deleted!</span>";
		return $msg;
	}
}

*/

}


?>