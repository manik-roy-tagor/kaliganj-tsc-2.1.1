<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/Database.php';
include_once $filepath . '/../helpers/Format.php';
?>
<?php
/**
*
*/
class Additional {
	private $db;
	private $fm;
	function __construct() {
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function getYoutubeTopic() {
		$query = "SELECT * FROM youtube_links ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}


	public function getAboutUsList() {
		$query = "SELECT * FROM additional_setting WHERE post_type = 'about_us'";
		$result = $this->db->select($query);
		return $result;
	}
	public function getAboutUs() {
		$query = "SELECT * FROM additional_setting WHERE post_type = 'about_us'";
		$result = $this->db->select($query);
		return $result;
	}

	public function settingsCreated($data){
		$post_type  = "about_us";	
		$post_title = $this->fm->validation($data['post_title']);
		$post_title = mysqli_real_escape_string($this->db->link,$post_title);
		$descrip 	= $this->fm->validation($data['descrip']);
		$descrip 	= mysqli_real_escape_string($this->db->link,$descrip);
		if (empty($post_title) || empty($descrip)) {
			$msg = "<div class='alert alert-danger alert-dismissable Cus'>Field must not be empty!</div>";
			return $msg;
		}else{
			$query = "INSERT INTO additional_setting(post_type, post_title, post_desc, isActive) VALUES('$post_type','$post_title','$descrip','1')";
		$Notice_Insert = $this->db->insert($query);
			if ($Notice_Insert) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Information Inserted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Information not inserted.</div>";
				return $msg;
			}
		}
	
	}
	public function DeactiveAbout($id) {
		$query = "UPDATE additional_setting SET isActive = '0' WHERE id = '$id'";
			$result = $this->db->update($query);
			return $result;
	}
	public function ActiveAbout($id) {
		$query = "UPDATE additional_setting SET isActive = '1' WHERE id = '$id'";
			$result = $this->db->update($query);
			return $result;
	}
	public function EditInformation($id) {
		$query = "UPDATE additional_setting SET isActive = '0' WHERE id = '$id'";
			$result = $this->db->update($query);
			return $result;
	}
	public function DelInformation($id) {
		$query = "UPDATE additional_setting SET isActive = '1' WHERE id = '$id'";
			$result = $this->db->update($query);
			return $result;
	}


	public function getAllTrades() {
		$query = "SELECT * FROM additional_setting WHERE post_type = 'trade_of_ktsc' AND isActive = '1'";
		$result = $this->db->select($query);
		return $result;
	}
	public function getFooterGallary() {
		$query = "SELECT * FROM photo_gallary WHERE add_desc = 'Gallary' ORDER By id DESC LIMIT 10";
		$result = $this->db->select($query);
		return $result;
	}
	public function getPhotoGallary() {
		$query = "SELECT * FROM photo_gallary WHERE add_desc = 'Gallary' ORDER By id DESC LIMIT 10";
		$result = $this->db->select($query);
		return $result;
	}
	public function getCitizenChatar() {
		$query = "SELECT * FROM photo_gallary WHERE add_desc = 'Citizen Chartar' ORDER By id";
		$result = $this->db->select($query);
		return $result;
	}

	public function GallaryUpload($filename, $add_desc, $tempname) {
		$add_desc = $this->fm->validation($add_desc);
		$add_desc = mysqli_real_escape_string($this->db->link, $add_desc);

		$filename = mt_rand(1000,1000000000)." - ".$filename;
		$folder = "../files/gallary/".$filename;  
		$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

		if(empty($add_desc) || empty($filename)){
			$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Field must not be empty.</div>";
			return $msg;
		}
				
		if(move_uploaded_file($tempname, $folder)){
		$query = "INSERT INTO photo_gallary(photo_name, add_desc) VALUES('$filename','$add_desc')";
		$result = $this->db->insert($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Photo Inserted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Photo not inserted.</div>";
				return $msg;
			}
			}
	}


















	public function getCatById($editid) {
		$query = "SELECT * FROM category WHERE id = '$editid'";
		$result = $this->db->select($query);
		return $result;
	}
	public function catInsert($data) {
		$catname = $this->fm->validation($data['catname']);
		$catname = mysqli_real_escape_string($this->db->link, $catname);
		$description = $this->fm->validation($data['description']);
		$description = mysqli_real_escape_string($this->db->link, $description);
		if ($catname == '' || $description == '') {
			$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Fields must not be empty.</div>";
			return $msg;
		} else {
			$query = "INSERT INTO category(CatName, description) VALUES('$catname','$description')";
			$catInsert = $this->db->insert($query);
			if ($catInsert) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Category Inserted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Category not inserted.</div>";
				return $msg;
			}
		}
	}
public function catUpdate($data, $editid) {
		$catname = $this->fm->validation($data['catname']);
		$catname = mysqli_real_escape_string($this->db->link, $catname);
		$description = $this->fm->validation($data['description']);
		$description = mysqli_real_escape_string($this->db->link, $description);
		$id = mysqli_real_escape_string($this->db->link, $editid);
		if (empty($catname)|| empty($description)) {
			$msg = "<div class='alert alert-warning alert-dismissable Cus'><b>Sorry!</b> Field must not be empty.</div>";
				return $msg;
		} else {
			$query = "UPDATE category SET CatName = '$catname', description = '$description' WHERE id = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Category Updated Successfully.</div>";
				return $msg;
			} else {
				$msg = "<span class='error'>Table Not Updated!</span>";
				return $msg;
			}
		}
	}
	public function delCatById($id) {
		$query = "DELETE FROM category WHERE id = '$id'";
		$deledata = $this->db->delete($query);
		if ($deledata) {
			$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Category Deleted Successfully.</div>";
			return $msg;
		} else {
			$msg = "<span class='alert alert-warning' style='font-size: 16px; color: #fff;'>Category Not Deleted!</span>";
			return $msg;
		}
	}

	/* ------- Sub Category ---------*/
	public function subCatInsert($data) {
		$parentcat = $this->fm->validation($data['parentcat']);
		$parentcat = mysqli_real_escape_string($this->db->link, $parentcat);
		$sub_category = $this->fm->validation($data['sub_category']);
		$sub_category = mysqli_real_escape_string($this->db->link, $sub_category);
		if ($parentcat == '' || $sub_category == '') {
			$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Fields must not be empty.</div>";
			return $msg;
		} else {
			$query = "INSERT INTO subcategory(sub_category, parentcat) VALUES('$sub_category','$parentcat')";
			$catInsert = $this->db->insert($query);
			if ($catInsert) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success! </b>Sub Category Inserted Successfully.</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Sub Category not inserted.</div>";
				return $msg;
			}
		}
	}


	public function getAllSubCat() {
		$query = "SELECT * FROM subcategory ORDER BY id DESC";

		$result = $this->db->select($query);
		return $result;
	}
/*
	public function getCatById($editid) {
		$query = "SELECT * FROM category WHERE id = '$editid'";
		$result = $this->db->select($query);
		return $result;
	}

public function catUpdate($data, $editid) {
		$catname = $this->fm->validation($data['catname']);
		$catname = mysqli_real_escape_string($this->db->link, $catname);
		$description = $this->fm->validation($data['description']);
		$description = mysqli_real_escape_string($this->db->link, $description);
		$id = mysqli_real_escape_string($this->db->link, $editid);
		if (empty($catname)|| empty($description)) {
			$msg = "<div class='alert alert-warning alert-dismissable Cus'><b>Sorry!</b> Field must not be empty.</div>";
				return $msg;
		} else {
			$query = "UPDATE category SET CatName = '$catname', description = '$description' WHERE id = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Category Updated Successfully.</div>";
				return $msg;
			} else {
				$msg = "<span class='error'>Table Not Updated!</span>";
				return $msg;
			}
		}
	}
	*/
	public function delsubcatById($id) {
		$query = "DELETE FROM subcategory WHERE id = '$id'";
		$deledata = $this->db->delete($query);
		if ($deledata) {
			$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Subcategory Deleted Successfully.</div>";
			return $msg;
		} else {
			$msg = "<span class='alert alert-warning' style='font-size: 16px; color: #fff;'>Subcategory Not Deleted!</span>";
			return $msg;
		}
	}

}
?>