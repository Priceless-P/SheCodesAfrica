<?
class UserModel
{
    public function __construct(){
        /*Connects to database */
   $this->db = new Database;
   }

   public function findUser($data)
    {
    $this->db->query("SELECT * FROM Users where username = :username && password = :password");
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $row = $this->db->getOne();

        if($this->db->rowCount()>0){
            return true;
    }else{
        return false;
    }
    }

    public function register($data)
    {
        $this->db->query("INSERT INTO Users (username, email, password)
                VALUES(:username, :email, :password)");
                $this->db->bind(':username', $data['username']);
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':password', $data['password']);
                $this->db->execute();
    }
}
