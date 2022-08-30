<?
class Furniture extends ProductType {
      private $db;
	
	public function __construct($id){
	     /*Connects to database */
	$this->db = new Database;
	 $this->db->query("SELECT * FROM Products WHERE product_id = :id");
	    $this->db->bind(':id', $id);
	    $row = $this->db->getOne();
	    
	    if($this->db->rowCount()>0){
	        echo "Dimensions: $row->length (cm) x $row->width (cm) x $row->height (cm)";
	        return true;
	    }else{
	        return false;
   }
	}
}