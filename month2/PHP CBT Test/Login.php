<?
require_once 'Database.php';
class Login {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function login(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset('login')){
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                $this->db->query("SELECT * FROM Users where username = :username && password = :password");
                $this->db->bind(':username', $username);
                $this->db->bind(':password', $password);
                $row = $this->db->getOne();

                if($this->db->rowCount()>0){
                    if(isset($remember)){
                        setcookie("username", $row['username'], time() + (86400 *30));
                        setcookie("password", $row['password'], time() + (86400 *30));
                    }
                        $_SESSION['id']= $row['id'];
                        header('location:views/dashboard.php');

                }else{
                    $_SESSION['message'] = "Login failed. User not found";
                    header('location:views/index.php');
                }
            }
        }
    }
    
}