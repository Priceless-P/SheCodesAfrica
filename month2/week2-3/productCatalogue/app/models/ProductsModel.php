<?php

class ProductsModel{
	private $db;
	
	public function __construct(){
	     /*Connects to database */
	$this->db = new Database;
	}
	
	 /*Fetches all products from database */
	public function getProducts(){
	$this->db->query("SELECT * FROM Products");
	return $this->db->getAll();
	}
	
	 /* Delete selected products*/
	public function deleteProducts($delete){
		$this->db->query("DELETE FROM Products WHERE product_id = :id");
		$this->db->bind(':id', $delete);
		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

}