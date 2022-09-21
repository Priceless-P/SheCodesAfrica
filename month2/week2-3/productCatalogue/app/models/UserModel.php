<?php
class UserModel
{
    public function __construct(){
        /*Connects to database */
   $this->db = new Database;
   }

   public function login($username, $password){
      $this->db->query('SELECT * FROM Users WHERE username = :username');
      $this->db->bind(':username', $username);
      $row = $this->db->getOne();
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }
    
    public function register($data){
                $this->db->query("INSERT INTO Users (email, username, password)
	            VALUES(:email,:username, :password)");
	            
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':username', $data['username']);
                $this->db->bind(':password', $data['newpass']);
                if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
            }
        
    public function find($email){
	    $this->db->query("SELECT * FROM Users WHERE email = :email");
	    $this->db->bind(':email', $email);
	    $row = $this->db->getOne();
	    
	    if($this->db->rowCount()>0){
	       // echo "$row->username";
	        return true;
	    }else{
	        return false;
	    }
	}
}
