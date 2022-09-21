<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->usermodel =$this->model('UserModel');
    }

		public function login(){
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		 $data = [
		"username"=> trim($_POST['username']),
		"password"=> trim($_POST['password']),
		];
	$loggedInUser = $this->usermodel->login($data['username'], $data['password']);

          if($loggedInUser){
              flash('login_success', 'Login Successful');
            $this->createUserSession($loggedInUser);
          } else {
          flash('login', 'Password or Username incorrect');
          $this->view('users/login', $data);
          }
		}
		else {
		$this->view('users/login');
		}
	}

	public function register(){
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		    $password = trim($_POST['password']);
		    $newpass = password_hash($password, PASSWORD_DEFAULT);
		$data = [
		"email"=> trim( $_POST['email']),
		"username"=> trim( $_POST['username']),
		"newpass"=> $newpass,
		"string"=>"Email or Phone already exists, Please choose another or login."
		];
		
	    if($this->usermodel->find($data['email']))
	    {
		      flash('reg', "Email or Phone already exists, Please choose another or login");
	    }
	    else
	    {
	        
		    if($this->usermodel->register($data))
		        {
		    	redirect ('users/login');
		    flash('reg_success', 'Registration Successful. Please Login'); 
		        }
		        else
		        {
		            flash('reg',"Registration not successful, Please again later.");
		        }
		
		}
	    
	}
		else {
		$this->view('users/register');
		}
	}
        
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->username;
      redirect('');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('index');
    }
}