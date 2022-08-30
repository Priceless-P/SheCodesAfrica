<?php
class Products extends Controller {
	public function __construct(){
	    /* load model*/
		$this->productModel = $this->model('ProductsModel');

	}
	/*get products */
	public function index(){
		$products=$this->productModel->getProducts();
		$data = [
		'title' => 'Product Page',
		'Products'=> $products
		];
		$this->view('index', $data);
	}


	/**
	 * This function deletes selected products
	 * Delete selected
	 * check if request mode is POST
	 * if select button is clicked
	 * get selected products
	 * Delete them
	 * if no product is selected, redirect to home page
	 */
	public function massDelete(){
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
	        if(isset($_POST["delete"])){
	            $toBeDeleted = $_POST["checkboxes"];
	            foreach($toBeDeleted as $delete){
	                //var_dump( $delete);
	                if($this->productModel->deleteProducts($delete)){
	                     redirect('');
	                }
	            }
	        if(!isset($toBeDeleted)){
	            redirect('');
	        }
	        }
	    }
	}

}