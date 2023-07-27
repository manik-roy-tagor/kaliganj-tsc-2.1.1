<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/Database.php';
include_once $filepath . '/../helpers/Format.php';
?>
<?php
/**
*
*/
class Notice{
	private $db;
	private $fm;
	function __construct() {
		$this->db = new Database();
		$this->fm = new Format();
	}
	/* ------- tableegory ---------*/

	public function getAllActiveNotice() {
		$query = "SELECT * FROM notice_tbl WHERE isActive = '1' ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllNotice() {
		$query = "SELECT * FROM notice_tbl ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function readFile($file_id){
		$query = "SELECT * FROM notice_tbl WHERE id = '$file_id'";
		$result = $this->db->select($query);
		return $result;
}
	public function DeactiveNotice($id) {
		$query = "UPDATE notice_tbl SET isActive = '0' WHERE id = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Notice Deleted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Notice Not Deleted.</div>";
				return $msg;
			}
	}
	public function ActiveNotice($id) {
		$query = "UPDATE notice_tbl SET isActive = '1' WHERE id = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Notice Deleted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Notice Not Deleted.</div>";
				return $msg;
			}
	}
	public function noticeUpload($notice_title, $descrip, $filename, $tempname) {
		$notice_title = $this->fm->validation($notice_title);
		$notice_title = mysqli_real_escape_string($this->db->link, $notice_title);

		$descrip = $this->fm->validation($descrip);
		$descrip = mysqli_real_escape_string($this->db->link, $descrip);
		
		$filename = mt_rand(1000,1000000000)." - ".$filename;
		$folder = "../files/notice/".$filename;  
		$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
		if($notice_title == "" || $descrip == "" || $filename == ""){
			$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Field must not be empty.</div>";
			return $msg;
		}
		if($imageFileType != "pdf"){
		$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Only PDF File can be uploaded.</div>";
			return $msg;
		}		
		if(move_uploaded_file($tempname, $folder)){
		$query = "INSERT INTO notice_tbl(title, file_name, descrip, isActive) VALUES('$notice_title','$filename','$descrip','1')";
		$Notice_Insert = $this->db->insert($query);
			if ($Notice_Insert) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Notice Inserted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Notice not inserted.</div>";
				return $msg;
			}
			}
	}

	public function allReset($tableName){
	$query = "INSERT INTO deliveryhistory(orderid, tableName, productName, ProPrice, Quantity) SELECT orderid, tableName, productName, ProPrice, Quantity FROM orderfromtable WHERE tableName='$tableName'";
	$result = $this->db->select($query);
			
	$sql = "DELETE FROM orderfromtable WHERE tableName='$tableName'";
	$result2 = $this->db->select($sql);
}
	public function setAlltableTimer($tableName,$timer) {
		$query = "INSERT INTO timer(datetimenow, status, TableName) VALUES('$timer','open','$tableName')";
		$result = $this->db->select($query);
		if ($result) {
			$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Set the time successfully.</div>";
				return $msg;
		}
		
	}
	
public function gettableById($editid) {
		$query = "SELECT * FROM tables WHERE id = '$editid'";
		$result = $this->db->select($query);
		return $result;
	}
	public function tableUpdate($data, $id) {
		$tablepass = $this->fm->validation(md5($data['tablepass']));
		$tablepass = mysqli_real_escape_string($this->db->link, $tablepass);
		$id = mysqli_real_escape_string($this->db->link, $id);
		if (empty($tablepass)) {
			$msg = "<div class='alert alert-warning alert-dismissable Cus'><b>Sorry!</b> Field must not be empty.</div>";
				return $msg;
		} else {
			$query = "UPDATE tables SET Password = '$tablepass' WHERE id = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Password Updated Successfully.</div>";
				return $msg;
			} else {
				$msg = "<span class='error'>tableegory Not Updated!</span>";
				return $msg;
			}
		}
	}

	
}
?>