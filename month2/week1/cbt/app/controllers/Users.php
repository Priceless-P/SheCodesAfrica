<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->usermodel =$this->model('UserModel');
        $this->quizModel = $this->model('QuizModel');
    }

		public function index(){
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		 $data = [
		"username"=> trim($_POST['username']),
		"password"=> trim($_POST['password']),
		'remember'=> trim($_POST['remember'])
		];
	$loggedInUser = $this->usermodel->login($data['username'], $data['password']);

          if($loggedInUser){
               if(isset($data['remember'])){
            setcookie("username", $data['username'], time() + 360);
            setcookie("password", $data['password'], time() + 360);
               }
            $this->createUserSession($loggedInUser);
            redirect('Users/dashboard');
            flash('login_success', 'Login Successful');
          } else {
          flash('login', 'Username or Password incorrect');
          $this->view('index', $data);
          }
		}
		else {
		$this->view('index');
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
		"string"=>"Username already exists, Please choose another or login."
		];
		
	    if($this->usermodel->find($data['username']))
	    {
		      flash('reg', "Username already exists, Please choose another or login");
		      $this->view('register');
	    }
	    else
	    {
	        
		    if($this->usermodel->register($data))
		        {
		    	redirect ('');
		    flash('reg_success', 'Registration Successful. Please Login'); 
		        }
		        else
		        {
		            flash('reg',"Registration not successful, Please again later.");
		        }
		
		}
		$this->view('register');
	    
	}
		else {
		$this->view('register');
		}
	}
	public function dashboard()
	{
	    	if($_SERVER["REQUEST_METHOD"]=="POST")
	    	{
	    	    
	    	}
	    else
	    {
	       
	    $this->view('dashboard');
	    }
	}
	public function page_blank()
	{
	    $this->view('page_blank');
	}

	public function quiz_comp()
	{
	    $query = $this->quizModel->computer();
	        $queries =[
	            'queries'=>$query,
	            ];
        
	  if($_SERVER["REQUEST_METHOD"]=="POST")
	    	{
	    	    $array = array();
	    	    $correct = array();
	    	    $sum =0;
	    	    foreach ($query as $key)
                 {
                     $correct[] = $key->correct_answer;
                       for($i=0; $i<=9;$i++)
                       {
                        if($_POST[$i] ==  $key->correct_answer)
                            {
                            $sum++;
                            $array[] = $_POST[$i];
                            }
                        }
                }
                    $score = $sum/10 * 100;
                    $data =
                    [
                        'username'=> $_SESSION['user_name'],
                        'subject'=> 'Computer Science',
                        'score'=>"$score"
                        ];
                        
                    if($this->usermodel->insertResult($data))
                    {
                        $array1 = print_r(array_values($array));
                        $correct1 = print_r(array_values($correct));
                    flash('result',"Welldone, Your score is $score%"); 
                    $this->view('quiz');
                    }
	    	}
  
	    else
	    {
	         $query = $this->quizModel->computer();
	        $data =[
	            'queries'=>$query,
	            ];
	           // var_dump($data['queries']);
	    $this->view('quiz_comp', $data);
	    }
	}
	
	
	public function quiz_nature()
	{
	    $query = $this->quizModel->science();
	        $queries =[
	            'queries'=>$query,
	            ];
        
	  if($_SERVER["REQUEST_METHOD"]=="POST")
	    	{
	    	    $sum =0;
	    	    foreach ($query as $key)
                 {
                     
                       for($i=0; $i<=9;$i++)
                       {
                        if($_POST[$i] ==  $key->correct_answer)
                            {
                            $sum++;
                            }
                        }
                }
                    $score = $sum/10 * 100;
                    $data =
                    [
                        'username'=> $_SESSION['user_name'],
                        'subject'=> 'Science and Nature',
                        'score'=>"$score"
                        ];
                        
                    $this->usermodel->insertResult($data);
                    flash('result',"Welldone, Your score is $score%"); 
                    //unset($_SESSION["data_nat"]);
                    $this->view('quiz');
	    	}
  
	    else
	    {
	       
	    $this->view('quiz_nature', $queries);
	    }
	}
	
public function quiz_general()
	{
	    $query = $this->quizModel->nature();
	        $queries =[
	            'queries'=>$query,
	            ];
        
	  if($_SERVER["REQUEST_METHOD"]=="POST")
	    	{
	    	    $sum =0;
	    	    foreach ($query as $key)
                 {
                     
                       for($i=0; $i<=9;$i++)
                       {
                        if($_POST[$i] ==  $key->correct_answer)
                            {
                            $sum++;
                            }
                        }
                }
                    $score = $sum/10 * 100;
                    $data =
                    [
                        'username'=> $_SESSION['user_name'],
                        'subject'=> 'SGeneral Knowledge',
                        'score'=>"$score"
                        ];
                        
                    $this->usermodel->insertResult($data);
                    flash('result',"Welldone, Your score is $score%"); 
                    //unset($_SESSION["data_nat"]);
                    $this->view('quiz');
	    	}
	    else
	    {
	    $this->view('quiz_general', $queries);
	    }
	}
	
	public function quiz()
	{
	    $this->view('quiz');
	}
	
	public function results()
	{
	    $username = $_SESSION['user_name'];
	    $result = $this->usermodel->getResult($username);
	    $data = [
	        'results'=>$result,
	        ];
	    $this->view('results', $data);
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
      redirect('');
    }
}