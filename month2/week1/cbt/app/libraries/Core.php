<?php
class Core {
    /**
    *set default Controller
    *set default Method
    *set default Params
    * 
    */
	private $currentController = 'Users';
	private $currentMethod = 'index';
	private $currentParams = [];
	
	public function __construct(){
	    /**
	     * call getUrl method in order to get the URL
	     * check f the inputted URL/controller exists
	     * if yes, make it the default controller
	     * require it
	     * instantiate it
	     */
		$url = $this->getURL();
		
		if(file_exists('../app/controllers/'. ucwords($url[0]). '.php')){
			$this->currentController = ucwords($url[0]);
			unset($url[0]);
		}
			require_once '../app/controllers/'. $this->currentController. '.php';
			$this->currentController = new $this->currentController;
		
		/**
		 * check for the inputted method 
		 *if present, unset
		 *set it to currentMethod
		 *unset it
		 */
		if(isset($url[1])){
			if(method_exists($this->currentController, $url[1])){
			$this->currentMethod= $url[1];
			unset($url[1]);
		}
	}
		
		/*check if Params is specified in the url,
		*if yes, set it to be equal to the currentParams,
		*else currentParams = empty array
		*call call_user_func_array()
		*/
		
		$this->currentParams = $url ? array_values($url) : [];
		call_user_func_array([$this->currentController, $this->currentMethod], $this->currentParams);
	}
	
	   /**
	    * This function will get the specified URL 
	    * if URL is set,
	    *remove whitespace or other predefined characters 
	   	* filter the url 
	   	* break a string into an array
	   	* return it 
	   	*/
	public function getURL(){
	    
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url =explode('/', $url);
			return $url;
		}
	}
}