<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>
<?php
/**
* Product Class
*/
class Product{
	
	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
public function getAllProductByCat($catName){
	$query = "SELECT * FROM product WHERE proCat = '$catName'";
	$result = $this->db->select($query);
	return $result;
	}
		public function getAllSubcatByCat($catName) {
		$query = "SELECT * FROM subcategory WHERE parentcat = '$catName'";
		$result = $this->db->select($query);
		return $result;
	}
public function getSingleProduct($orderid)
{
	$query = "SELECT * FROM product WHERE proId = '$orderid'";
	$result = $this->db->select($query);
	return $result;
}
public function productInsert($data){
	$proname = $this->fm->validation($data['proname']);
	$proname = mysqli_real_escape_string($this->db->link,$proname);
	$procat = $this->fm->validation($data['procat']);
	$procat = mysqli_real_escape_string($this->db->link,$procat);
	$description = $this->fm->validation($data['description']);
	$description = mysqli_real_escape_string($this->db->link,$description);
	
	$proprice = $this->fm->validation($data['proprice']);

	$proprice = mysqli_real_escape_string($this->db->link,$proprice);
	
if ($proname == '' || $procat == '' || $description == '' || $proprice == '' ) {
	$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Fields Must not be empty!</div>";
	return $msg;
}elseif($proprice < 0){
$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Price sould be reasonable!</div>";
	return $msg;
}else{
	$query = "INSERT INTO product(ProName, Description, proCat, price) VALUES('$proname','$description','$procat','$proprice')";
	$productInsert = $this->db->insert($query);
		if ($productInsert) {
		$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Product Inserted Successfully!</div>";
	return $msg;
		}else{
			$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Product not inserted!</div>";
	return $msg;
		}
}
}
public function getAllProducts(){
	$query = "SELECT * FROM product ORDER BY proId DESC";
	$result = $this->db->select($query);
	return $result;
}
public function getProById($id){
	$query = "SELECT * FROM product WHERE proId = '$id'";
	$result = $this->db->select($query);
	return $result;
}
public function productUpdate($data, $editid){
	$proname = $this->fm->validation($data['proname']);
	$proname = mysqli_real_escape_string($this->db->link, $proname);
	$procat = $this->fm->validation($data['procat']);
	$procat = mysqli_real_escape_string($this->db->link, $procat);
	$description = $this->fm->validation($data['description']);
	$description = mysqli_real_escape_string($this->db->link, $description);
	$proprice = $this->fm->validation($data['proprice']);
	$proprice = mysqli_real_escape_string($this->db->link, $proprice);
if ($proname == '' || $procat == '' || $description == '' || $proprice == '') {
	$msg = "<div class='alert alert-warning alert-dismissable Cus'><b>Sorry!</b> Fields must not be empty.</div>";
		return $msg;
}else{
	$query = "UPDATE product SET
	ProName = '$proname',
	proCat = '$procat',
	Description = '$description',
	price = '$proprice'
		WHERE proId = '$editid'";
	$result = $this->db->update($query);
	if($result) {
			$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Product Updated Successfully.</div>";
			return $msg;
		} else {
			$msg = "<span class='error'>Table Not Updated!</span>";
			return $msg;
		}
}
}
public function delProductById($id){
	
	$delquery = "DELETE FROM product WHERE proId = '$id'";
	$deledata = $this->db->delete($delquery);
	if ($deledata) {
		$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Product Deleted Successfully.</div>";
			return $msg;
	}else{
		$msg = "<span class='error'>Product Not Deleted!</span>";
		return $msg;
	}
}
public function selecttime($tableName){
	
	$query = "SELECT * FROM timer WHERE TableName = '$tableName' AND status = 'open' ";
	$result = $this->db->select($query);
	return $result;
}

}
?>