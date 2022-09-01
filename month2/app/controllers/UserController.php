<?
class UserController extends Controller
{
    public function __construct()
    {
        $this->usermodel =$this->model('UserModel');
    }

    public function login(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset('login')){
                $data =
                [
                'username' => trim($_POST['username']),
                'password'=> trim($_POST['password']),
                ];
                if($this->model->findUser($data)){
                    redirect ('index');
                }
                $this->view('login', $data);
            }
        }
        else
        {
            $this->view('login');
        }
        }

        public function register(){
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(isset('register'))
                {
                    $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'username' => trim($_POST['username']),
                    ];

                    if($this->model->register($data)){
                        $_SESSION['message'] = "Registration Successful. Please login with your details";
                        redirect('index');

                        }else{
                             $err = " An error occured";
                             $this->view('login', $err);
                             }
                    $this->view('register', $data);
                }

            }
            $this->view('login', $data);
        }
}