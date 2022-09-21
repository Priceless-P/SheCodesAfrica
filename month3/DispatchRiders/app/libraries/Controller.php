<?php
class Controller{

	public function model($model){
	 /* load model */
		require_once '../app/models/'. $model. '.php';
		/*instantiate new model */
		return new $model();
	}

	public function view($view, $data=[]){
		/*load view */
		if(file_exists('../app/views/'.$view.'.php')){
			require_once '../app/views/'.$view.'.php';
		}else{
			// die('View does not exists');
			require_once '../app/views/404.php';
		}
	}

}