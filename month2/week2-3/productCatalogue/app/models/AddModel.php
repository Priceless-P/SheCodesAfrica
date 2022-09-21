<?php

class AddModel{
	private $db;

	public function __construct(){
	    /* Connect to that database*/
	$this->db = new Database;
	}

	 /* Insert product to database */
	public function addProducts($data){
	$this->db->query("INSERT INTO Products (SKU, name, price, type, model, weight, length, width, height, filename)
	VALUES(:sku, :name, :price, :type, :model, :weight, :length, :width, :height, :filename)");
	$this->db->bind(':sku', $data['sku']);
	$this->db->bind(':name', $data['name']);
	$this->db->bind(':price', $data['price']);
	$this->db->bind(':type', $data['type']);
	$this->db->bind(':model', $data['model']);
	$this->db->bind(':weight', $data['weight']);
	$this->db->bind(':length', $data['length']);
	$this->db->bind(':width', $data['width']);
	$this->db->bind(':height', $data['height']);
	$this->db->bind(':filename', $data['filename']);
	if($this->db->execute()){
	return true;
	}else{
	return false;
	  }
	}
	/*This function checks if SKU already exits */
	public function findProduct($sku){
	    $this->db->query("SELECT * FROM Products WHERE sku = :sku");
	    $this->db->bind(':sku', $sku);
	    $row = $this->db->getOne();

	    if($this->db->rowCount()>0){
	        return true;
	    }else{
	        return false;
	    }
	}
}