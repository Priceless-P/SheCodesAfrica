<?php
class Riders extends Controller {
	public function __construct(){
	    /* load model*/
		$this->ridersModel = $this->model('RidersModel');
		$this->usersModel = $this->model('UsersModel');
		$this->chatModel = $this->model('ChatModel');
		$this->orderModel = $this->model('OrderModel');

	}

	public function index(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		    
		     $id = $_SESSION['rider_id'];
		     $username = $_SESSION['rider_name'];
	      $details = $this->ridersModel->getRiderById($id);
	      $orders = $this->orderModel->getOrdersForRiders($username);
	       $detailSetting = $this->ridersModel->getRiderDetails($id);
	       $orderCount = $this->orderModel->getOrdersRiderCount($username);
		    $data = 
		    [
		    'details' => $details,
		    'orders' => $orders,
		    'settings'=>$detailSetting,
		    'orderCount'=> $orderCount,
		    ];
		$this->view('riders/dashboard', $data);
		}
	}

	public function chat_user(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		    $id = $_SESSION['rider_id'];
		    $users = $this->usersModel->getUsersNot($id);
		    $data = [
		        'users' => $users,
		        ];
		$this->view('riders/chat_user', $data);
		}
	}
	
	public function chats($id)
	{
	     if($_SERVER["REQUEST_METHOD"]=="POST"){
	        $uniqueid = $this->chatModel->getUniqueId($id);
	        $data = [
	       'currentUser' => $_SESSION['rider_id'],
	       'message' => trim($_POST['message']),
	       'incomingId' => $uniqueid->unique_id,
	       'chatUserID' => $_SESSION['rider_id'],
	       'uniqueid' => $uniqueid->unique_id,
	       'timestamp' => date("h:i:s A, d F Y"),
	       ];
	       $this->chatModel->insertChats($data); 
	       redirect("riders/chats/$id");
		}
		else
		{
		    $rider = $this->ridersModel->getRiderById($id);
		    
		    $sender_id = $_SESSION['rider_name'];
		    $uniqueid = $this->chatModel->getUniqueId($id);
		    $currentUser = $this->chatModel->getUniqueId($_SESSION['rider_id']);
	        $data = [
	       'sessionid' => $_SESSION['rider_id'],
	       //'message' => trim($_POST['message']),
	       'incomingId' => $uniqueid->unique_id,
	       'chatUserID' => $id,
	       'currentUser' => $currentUser->unique_id,
	       'timestamp' => date("h:i:s A, d F Y"),
	       ];
		   
            $receiving = $this->chatModel->getSenderChat($data);
		    $data = [
		
		        'rider' => $rider,
		        'receiving' =>$receiving,
		        'chatUserID' => $_SESSION['rider_id'],
		        'receiver_id' =>$id,
		        'unique_id' => $_SESSION['rider_name'],
		        
		        ];
		    	$this->view("riders/chats", $data);
		}
	}

    public function orders(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		    
		}
		else {
		    $username = $_SESSION['rider_name'];
		      $id = $_SESSION['rider_id'];
	      $details = $this->ridersModel->getRiderById($id);
		   $orders = $this->orderModel->getOrdersForRiders($username);
		   
		    $data =[
		        'details'=>$details,
		        'order'=> $orders
		        ];
		$this->view('riders/orders', $data);
		}
	}
	
	public function edit_details($id)
	{
	   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $filename = $_FILES["filename"]["name"];
		$tempname = $_FILES["filename"]["tmp_name"];
		$folder = "riderImages/".$filename;
	       $data = [
	   'user_id'=>$id,
	   	"filename"=> $filename,
		"routes"=> trim($_POST['location']),
		"vehicle_type"=> trim($_POST['vehicle_type']),
		"days_of_work"=> trim( $_POST['days_of_work']),
		"type_of_delivery"=> trim($_POST['type_of_delivery']),
		"time_of_work"=> trim($_POST['time_of_work']),
		"price"=> trim($_POST['price']),
		'id' => $id 
		];
		if($this->ridersModel->insertRiderDetails($data))
		{
		    $this->ridersModel->updateRiderDetails($data);
		    move_uploaded_file($tempname, $folder);
		    
		    flash('details_inserted', 'Details updated successfully');
		    redirect('riders/dashboard');
		    
		}
		
	   }
	   else{
		    $username = $_SESSION['rider_email'];
	      $details = $this->ridersModel->find($username);
	      $this->view("riders/edit_details");
		}
	}
	  	public function editProfile($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
          'id' => $id,
          'username' => trim($_POST['username']),
          'email' => trim($_POST['email']),
          'phone' => trim($_POST['phone']),
        ];
       
          if($this->ridersModel->updateProfile($data))
          {
            flash('profile_message', 'Profile Updated');
            redirect('riders/dashboard');
          } 
          else
          {
            flash('profile_err','Something went wrong');
          }
           $this->view('riders/edit', $data);
      }      
     

      else {
     
        $user = $this->ridersModel->getRiderById($id);

        $data = [
          'id' => $id,
          'username' => $user->username,
          'email' => $user->email,
          'phone' => $user->phone,
          'fullname'=>$user->fullname
        ];
  
        $this->view('riders/edit', $data);
      }
	}
	

    public function logout(){
      unset($_SESSION['rider_id']);
      unset($_SESSION['rider_email']);
      unset($_SESSION['rider_name']);
      unset($_SESSION['rider_location']);
      session_destroy();
      redirect('');
    }

}