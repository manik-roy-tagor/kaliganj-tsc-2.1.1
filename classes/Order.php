<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
/**
* Order Class
*/
class Order{
	
	private $db;
	private $fm;
	
	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function getOrder($tableName){
	$query = "SELECT * FROM orderfromtable WHERE tableName = '$tableName' AND status = 'Order'";
	$result = $this->db->select($query);
	return $result;
}
public function getAcceptedOrder($tableName){
	$query = "SELECT * FROM orderfromtable WHERE tableName = '$tableName' AND status = 'Accepted'";
	$result = $this->db->select($query);
	return $result;
}
public function getAcceptedOrderForAdmin(){
	$query = "SELECT * FROM orderfromtable WHERE status = 'Accepted'";
	$result = $this->db->select($query);
	return $result;
}
	public function getPendingOrder(){
	$query = "SELECT * FROM orderfromtable WHERE status = 'Pending'";
	$result = $this->db->select($query);
	return $result;
}
	public function getDeniedOrder(){
	$query = "SELECT * FROM orderfromtable WHERE status = 'Denied'";
	$result = $this->db->select($query);
	return $result;
}
	public function getAllOrder(){
	$query = "SELECT * FROM orderfromtable WHERE status = 'Order'";
	$result = $this->db->select($query);
	return $result;
}
	public function orderAccept($successid){
	$query = "UPDATE orderfromtable SET status = 'Accepted' WHERE orderid =  '$successid'";
	$result = $this->db->select($query);
	return $result;
}
	public function orderPending($pendingid){
	$query = "UPDATE orderfromtable SET status = 'Pending' WHERE orderid =  '$pendingid'";
	$result = $this->db->select($query);
	return $result;
}
	public function orderDeny($delid){
	$query = "UPDATE orderfromtable SET status = 'Denied' WHERE orderid =  '$delid'";
	$result = $this->db->select($query);
	if ($result) {
		$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Order Denied Successfully.</div>";
		return $msg;
	}
}

	public function addToCart($data){
	$ProductName = $this->fm->validation($data['ProductName']);
	$ProductName = mysqli_real_escape_string($this->db->link,$ProductName);
	$TableName = $this->fm->validation($data['TableName']);
	$TableName = mysqli_real_escape_string($this->db->link,$TableName);
	$ProductPrice = $this->fm->validation($data['ProductPrice']);
	$ProductPrice = mysqli_real_escape_string($this->db->link,$ProductPrice);
	$quantity = $this->fm->validation($data['quantity']);
	$quantity = mysqli_real_escape_string($this->db->link,$quantity);
	$ProductPrice = $ProductPrice*$quantity;
	
	$query2 = "SELECT * FROM orderfromtable WHERE tableName = '$TableName' AND productName = '$ProductName' AND status = 'Order'";
	$result2 = $this->db->select($query2);
	
		if ($result2) {
				$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> This product is already you have ordered. Please order a new one.</div>";
				return $msg;
			}else{
			$query = "INSERT INTO orderfromtable(tableName, productName, ProPrice, Quantity, status) VALUES('$TableName','$ProductName','$ProductPrice','$quantity','Order')";
			$placeOrder = $this->db->insert($query);
			
			$msg2 = "<div class='alert alert-info alert-dismissable Cus'><b>Success!</b> Your order place successfully.</div>";
			return $msg2;
			
		return $placeOrder;
		}
	}
public function getOrderedProduct($orderid){
	$query = "SELECT * FROM orderfromtable WHERE orderid = '$orderid'";
	$result = $this->db->select($query);
	return $result;
}
public function delCart($delid){
	$query = "SELECT * FROM orderfromtable WHERE orderid = '$orderid'";
	$result = $this->db->select($query);
	return $result;
}
public function updateCart($data,$orderid){
	$quantity = $this->fm->validation($data['quantity']);
	$quantity = mysqli_real_escape_string($this->db->link,$quantity);
	$query = "UPDATE orderfromtable SET Quantity = '$quantity' WHERE orderid =  '$orderid'";
	$result = $this->db->select($query);
			if ($result) {
		$msg = "<div class='alert alert-info alert-dismissable Cus'><b>Success!</b> Your order Updated successfully.</div>";
		return $msg;
	}
}
public function deleteCart($delid){
	$query = "DELETE FROM orderfromtable WHERE orderid = '$delid'";
	$deledata = $this->db->delete($query);
	if ($deledata) {
		$msg = "<div class='alert alert-success alert-dismissable Cus'><b>Success!</b> Order Cancelled Successfully.</div>";
				return $msg;
	}else{
		$msg = "<div class='alert alert-danger alert-dismissable Cus'><b>Sorry!</b> Order not cancelled. Something problem having. please contact with admin.</div>";
				return $msg;
	}
}


	
}
?>