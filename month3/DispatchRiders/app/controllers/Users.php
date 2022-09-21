<?php
class Users extends Controller {
	public function __construct(){
    $this->homeModel = $this->model('HomeModel');
	$this->usersModel = $this->model('UsersModel');
	$this->orderModel = $this->model('OrderModel');
	$this->chatModel = $this->model('ChatModel');
	$this->ridersModel = $this->model('RidersModel');
	}

	public function index(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		    $id = $_SESSION['user_id'];
		    $username = $_SESSION['user_name'];
		   $user = $this->usersModel->getUserDetails($id);
		   $orderCount = $this->orderModel->getOrdersCustomerCount($username);
		    $data =[
		        'user'=> $user,
		        'orderCount'=>$orderCount
		        ];
		$this->view('users/dashboard', $data);
		}
	}
	public function orders(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		    
		}
		else {
		    $username = $_SESSION['user_name'];
		   $orders = $this->orderModel->getOrders($username);
		    $data =[
		        'order'=> $orders
		        ];
		$this->view('users/orders', $data);
		}
	}
	public function create_order()
	{
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
	       $data = [
	       'package_name' => trim($_POST['package_name']),
            'price' => trim($_POST['price']),
            'pickup' => trim($_POST['pickup']),
            'dropoff' => trim($_POST['dropoff']),
            'rider' => trim($_POST['rider']),
            'customer' => $_SESSION['user_name'],
            'payment_method' => trim($_POST['payment_method']),
            'date' => date("Y/m/d"),
            ];
            $rider = $this->ridersModel->findRiderByUserName($data['rider']);
            if ($this->orderModel->order($data))
            {
                
                $Customer = $data['customer'];
                $details = $data['details'];
                $pickup = $data['pickup'];
                $dropoff =$data['dropoff'];
                $phone = $_SESSION['phone'];
                $rideremail = $rider->email;
                $to = $rideremail;
                $subject = "NEW Order from $Customer";
                $message = "DETAILS OF YOUR ORDER: \r
                Order Note: $details \r
                Pickup Location: $pickup \r
                Drop-off Location: $dropoff .\r
                Call the customer with the number $phone for more details." ;
            
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            @mail($to, $subject, $message, $headers);
                redirect('users/dashboard');
                flash('order_sent', 'Your Order has been sent. The Rider will contact you soon.');
            }
	    }
	    else
	    {
	        $riders = 	$this->homeModel->getRiders();
	        $data = [
	            'riders'=> $riders,
	            ];
	     	$this->view('users/neworder', $data);   
	    }
	}
	public function chat_rider(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		    $id = $_SESSION['user_id'];
		    $riders = $this->usersModel->getUsersCust($id);
		    $data = [
		        'riders' => $riders
		        ];
		$this->view('users/chat_rider', $data);
		}
	}
	public function chats($id)
	{
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
	        $uniqueid = $this->chatModel->getUniqueId($id);
	        $data = [
	       'currentUser' => $_SESSION['user_id'],
	       'message' => trim($_POST['message']),
	       'incomingId' => $uniqueid->unique_id,
	       'chatUserID' => $_SESSION['user_id'],
	       'uniqueid' => $uniqueid->unique_id,
	       'timestamp' => date("h:i:s A, d F Y"),
	       ];
	       $this->chatModel->insertChats($data); 
	       redirect("users/chats/$id");
		}
		else
		{
		    $rider = $this->ridersModel->getRiderById($id);
		     $uniqueid = $this->chatModel->getUniqueId($id);
		    $sender_id = $_SESSION['user_name'];
		    $currentUser = $this->chatModel->getUniqueId($_SESSION['user_id']);
		    
	        $data = [
	       'currentUser' => $currentUser->unique_id,
	       'incomingId' => $uniqueid->unique_id,
	       'chatUserID' => $id,
	        'sessionid' => $_SESSION['user_id'],
	       'timestamp' => date("h:i:s A, d F Y"),
	       ];
		   
            $receiving = $this->chatModel->getSenderChat($data);
		    $data = [
		        //'sending' => $sending,
		        'rider' => $rider,
		        'receiving' =>$receiving,
		        'receiver_id' =>$id,
		        'unique_id' => $_SESSION['user_name'],
		        
		        ];
		    	$this->view("users/chats", $data);
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
       
          if($this->usersModel->updateProfile($data))
          {
            flash('profile_message', 'Profile Updated');
            redirect('users/dashboard');
          } 
          else
          {
            flash('profile_err','Something went wrong');
          }
           $this->view('users/edit', $data);
      }      
     

      else {
     
        $user = $this->usersModel->getUserById($id);

        $data = [
          'id' => $id,
          'username' => $user->username,
          'email' => $user->email,
          'phone' => $user->phone,
        ];
  
        $this->view('users/edit', $data);
      }
	}
	
public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('');
    }
}