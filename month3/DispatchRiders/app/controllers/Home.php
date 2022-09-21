<?php
class Home extends Controller {
    const USER_ACTIVE = 'active';
    const USER_OFF = 'off';

	public function __construct(){
		$this->homeModel = $this->model('HomeModel');
		$this->userModel = $this->model('UsersModel');
		$this->ridersModel = $this->model('RidersModel');
	}
	public function index(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		 $riders = 	$this->homeModel->getRiders();
        //$details = $this->ridersModel->getRiderDetails();
		 $data =[
		     'riders'=>$riders,
		     ];
		$this->view('index', $data);
		}
	}
	public function login(){
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		 $data = [
		"email"=> trim($_POST['email']),
		"password"=> trim($_POST['password']),
		];
	$loggedInUser = $this->homeModel->login($data['email'], $data['password']);

          if($loggedInUser){
            $this->createUserSession($loggedInUser);
          
          } else {
          flash('login_err', 'Email or Password incorrect');
          $this->view('login', $data);
          }
		}
		else {
		$this->view('login');
		}
	}

	public function register(){
	    
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		    
		    $time = time();
           $ran_id = rand(time(), 100000000);
		    $password = trim($_POST['password']);
		    $newpass = password_hash($password, PASSWORD_DEFAULT);
		$data = [
		    'fullname'=>trim($_POST['fullname']),
		"username"=> trim($_POST['username']),
		"email"=> trim( $_POST['email']),
		"phone"=> trim($_POST['phone']),
		'location'=>trim($_POST['location']),
		"newpass"=> $newpass,
		'unique_id' => $ran_id,
		'status' => 'USER_ACTIVE',
		'role'=> trim( $_POST['role']),
		];
		
	
	    if($this->homeModel->find($data))
	    {
	        flash('reg_err',"Email exists");
		      $this->view('register');
		      
	    }
	    else
	    {
	        
		    if($this->homeModel->register($data))
		        {
		          flash('reg_success', 'Registration successful. Please Login');
		          
		    	redirect ('users/login');
		        }
		        else
		        {
		            flash('reg_err', " Registration not successful, Please again later.");
		        }
		
		}
	    
	}
		else {
		$this->view('register');
		}
	}
	
	 public function createUserSession($user){
	     $role = $this->userModel->getUserRole($user->username);
	     if ($role->role == "User")
	     {
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->username;
      $_SESSION['phone'] = $user->phone;
      redirect('users/dashboard');
	     }
	     elseif($role->role == "Rider")
	     {
	         $_SESSION['rider_id'] = $user->id;
      $_SESSION['rider_email'] = $user->email;
      $_SESSION['rider_name'] = $user->username;
      $_SESSION['rider_location'] = $user->location;
      redirect('riders/dashboard');
    }
	     
    }
    
//     public function driver($id){
// 		if($_SERVER["REQUEST_METHOD"]=="POST"){
// 		}
// 		else {
// 		    $details = $this->ridersModel->getRiderDetails($id);
// 		    $profile = $this->ridersModel->getRiderById($id);
// 		    $data =[
// 		        'details '=> $details,
// 		        'profile'=>$profile
// 		        ];
// 		$this->view('rider', $data);
// 		}
// 	}

    public function negotiate()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $details = trim($_POST['details']);
            $pickup = trim($_POST['pickup']);
            $dropoff = trim($_POST['dropoff']);
            $phone = trim($_POST['phone']);
            $rider = trim($_POST['rider']);
            $riderName = $this->ridersModel->findRiderByName($rider);
            $riderEmail = $riderName->email;
            $to = $riderEmail;
            $subject = 'NEW Order!';
            $message = "DETAILS OF YOUR ORDER:\n
                Order Note: $details\n
                Pickup Location: $pickup\n
                Drop-off Location: $dropoff\n
                Call the customer with the number $phone for more details." ;
            
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            @mail($to, $subject, $message, $headers);
      $this->view('negotiate');
           
            //$this->view('index');
		}
		else {
		$this->view('negotiate');
		}
        
    }


    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('');
    }
    public function logoutRider(){
      unset($_SESSION['rider_id']);
      unset($_SESSION['rider_email']);
      unset($_SESSION['rider_name']);
      unset($_SESSION['rider_location']);
      session_destroy();
      redirect('');
    }

	
}