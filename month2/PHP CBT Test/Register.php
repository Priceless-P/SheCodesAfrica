<?
require_once 'Database.php';
class Register {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }
public function register(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset('register')){
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $username = trim($_POST['username']);
                $this->db->query("INSERT INTO Users (username, email, password)
	            VALUES(:username, :email, :password)");
	            $this->db->bind(':username', $username);
                $this->db->bind(':email', $email);
                $this->db->bind(':password', $password);
                if($this->db->execute()){
                    $_SESSION['message'] = "Registration Successful. Please login with your details";
                    header('location:views/index.php');
                    return true;
                    }else{
                         return false;
                         }
            }
        }
    }
}
