<?php

class OrderModel{
	private $db;
	
	public function __construct(){
	$this->db = new Database;
	}

	public function order($data){
	$this->db->query("INSERT INTO Orders (package_name, price, pickup, dropoff, rider, customer, payment_method, date)
	VALUES(:package_name, :price, :pickup, :dropoff, :rider, :customer, :payment_method, :date)");
	$this->db->bind(':package_name', $data['package_name']);
	$this->db->bind(':price', $data['price']);
	$this->db->bind(':pickup', $data['pickup']);
	$this->db->bind(':dropoff', $data['dropoff']);
	$this->db->bind(':rider', $data['rider']);
	$this->db->bind(':customer', $data['customer']);
	$this->db->bind(':payment_method', $data['payment_method']);
	$this->db->bind(':date', $data['date']);
	if($this->db->execute()){
	return true;
	}else{
	return false;
	  }
	}
	public function getOrders($email){
	$this->db->query("SELECT * FROM Orders WHERE customer = :email");
	$this->db->bind(':email', $email);
	return $this->db->getAll();
	}
	public function getOrdersForRiders($username){
	$this->db->query("SELECT * FROM Orders WHERE rider = :username");
	$this->db->bind(':username', $username);
	return $this->db->getAll();
	}
    public function getOrdersCustomerCount($email){
	$this->db->query("SELECT * FROM Orders WHERE customer = :email");
	$this->db->bind(':email', $email);
	$this->db->getAll();
	return $this->db->rowCount();
	}
	public function getOrdersRiderCount($username){
	$this->db->query("SELECT rider FROM Orders WHERE rider = :username");
	$this->db->bind(':username', $username);
	$this->db->getAll();
	return $this->db->rowCount();
	}
	

}