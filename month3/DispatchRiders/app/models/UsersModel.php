<?php

class UsersModel{
	private $db;
	
	public function __construct(){
	$this->db = new Database;
	}
	
	public function getUsers(){
	$this->db->query("SELECT * FROM Users");
	return $this->db->getAll();
	}
	public function getUsersNot($id){
	$this->db->query("SELECT * FROM Users WHERE NOT id = :id AND NOT role = 'Rider'");
	$this->db->bind(':id', $id);
	return $this->db->getAll();
	}
	public function getUsersCust($id){
	$this->db->query("SELECT * FROM Users WHERE NOT id = :id AND NOT role = 'User'");
	$this->db->bind(':id', $id);
	return $this->db->getAll();
	}
	
	public function getUserDetails($id){
	$this->db->query("SELECT * FROM Users WHERE id = :id");
	$this->db->bind(':id', $id);
	return $this->db->getOne();
	}
	
	 public function insertChats($data)
	{
	   $this->db->query("INSERT INTO Chats (sender_id, receiver_id, unique_id, message, timestamp)
	            VALUES(:sender_id, :receiver_id, :unique_id, :message, :timestamp)");
	            $this->db->bind(':sender_id', $data['sender_id']);
	            $this->db->bind(':receiver_id', $data['receiver_id']);
	            $this->db->bind(':unique_id', $data['unique_id']);
	            $this->db->bind(':message', $data['message']);
	            $this->db->bind(':timestamp', $data['timestamp']);
	            
	            if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
	}
	public function getUserByUsername($username){
	$this->db->query("SELECT * FROM Users WHERE username = :username");
	$this->db->bind(':username', $username);
	return $this->db->getOne();
	}
	public function getUserById($id){
	$this->db->query("SELECT * FROM Users WHERE id = :id");
	$this->db->bind(':id', $id);
	return $this->db->getOne();
	}
	
	public function updateProfile($data){
      $this->db->query('UPDATE Users SET username = :username, email = :email, phone = :phone WHERE id = :id');
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function getUserRole($username){
	$this->db->query("SELECT role FROM Users WHERE username = :username");
	$this->db->bind(':username', $username);
	return $this->db->getOne();
	}

}