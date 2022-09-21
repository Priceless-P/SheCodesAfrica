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

	public function massDelete(){
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
	        if(isset($_POST["delete"])){
	            $toBeDeleted = $_POST["checkboxes"];
	            foreach($toBeDeleted as $delete){
	                //var_dump( $delete);
	                if($this->productModel->deleteProducts($delete)){
	                     redirect('');
	                     flash('delete_success', 'Products deleted');
	                }
	            }
	        if(!isset($toBeDeleted)){
	            redirect('');
	             flash('delete_fail', 'No Products selected');
	        }
	        }
	    }
	}

}