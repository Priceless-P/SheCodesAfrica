<?php

class HomeModel {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getRiders(){
        
	$this->db->query("SELECT * FROM Users WHERE role = 'Rider'");
	 $result = $this->db->getAll();
	 return $result;
	}
	
    public function login($email, $password){
      $this->db->query('SELECT * FROM Users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->getOne();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }
        
    
    public function register($data){
       
            
                $this->db->query("INSERT INTO Users (fullname,username, email, phone, password, unique_id, location, status, role)
	            VALUES(:fullname, :username, :email, :phone, :password,:unique_id, :location, :status, :role)");
	            $this->db->bind(':fullname', $data['fullname']);
	            $this->db->bind(':username', $data['username']);
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':phone', $data['phone']);
                $this->db->bind(':password', $data['newpass']);
                 $this->db->bind(':unique_id', $data['unique_id']);
                $this->db->bind(':location', $data['location']);
                $this->db->bind(':status', $data['status']);
                $this->db->bind(':role', $data['role']);
                if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
            }
        
    public function find($data){
	    $this->db->query("SELECT * FROM Users WHERE email = :email");
	    $this->db->bind(':email', $data['email']);
	    $row = $this->db->getOne();
	    
	    if($this->db->rowCount()>0){
	        return true;
	    }else{
	        return false;
	    }
	}
    
}