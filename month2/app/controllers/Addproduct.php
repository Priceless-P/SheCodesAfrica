<?php
class Addproduct extends Controller{
    	public function __construct(){
    	    /* load model*/
		$this->addModel = $this->model('AddModel');
	}

	/*Add product */
	public function index(){
	    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	    $string = "SKU already exists";
		$filename = $_FILES["filename"]["name"];
		$tempname = $_FILES["filename"]["tmp_name"];
		$folder = "images/".$filename;
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$data = [
		"sku"=> trim($_POST['sku']),
		"name"=> trim( $_POST['name']),
		"price"=> trim($_POST['price']),
		"type"=> trim($_POST['type']),
		"filename"=> $filename,
		"model"=> trim($_POST['model']),
		"weight"=> trim($_POST['weight']),
		"length"=> trim($_POST['length']),
		"width"=> trim($_POST['width']),
		"height"=> trim($_POST['height']),
		"string"=>$string
		];

		/*check if SKU exists */
	    if($this->addModel->findProduct($data['sku'])){
		      $data['string'];
	    }else{
	        /*if not, add product to database */
		if($this->addModel->addProducts($data)){
			move_uploaded_file($tempname, $folder);
		    	redirect ('');
		}

	 }
	 $this->view('add', $data);

	}
	/*If request method == Get, load view */
	else{
	    $this->view('add');
	 }
  }
}