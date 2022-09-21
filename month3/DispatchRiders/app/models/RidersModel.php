<?php

class RidersModel{
	private $db;
	
	public function __construct(){
	$this->db = new Database;
	}
	
	public function getRiderDetails($id){
	$this->db->query("SELECT * FROM Rider_Details WHERE user_id = :id");
	$this->db->bind(':id', $id);
	return $this->db->getAll();
	}
	
	public function insertRiderDetails($data){
 $this->db->query("INSERT INTO Rider_Details (user_id, routes, vehicle_type, type_of_delivery, days_of_work, time_of_work, price, filename)
	            VALUES(:user_id, :routes, :vehicle_type, :type_of_delivery, :days_of_work, :time_of_work, :price, :filename)");
	            $this->db->bind(':user_id', $data['user_id']);
	            $this->db->bind(':routes', $data['routes']);
	            $this->db->bind(':vehicle_type', $data['vehicle_type']);
                $this->db->bind(':type_of_delivery', $data['type_of_delivery']);
                $this->db->bind(':days_of_work', $data['days_of_work']);
                $this->db->bind(':time_of_work', $data['time_of_work']);
                $this->db->bind(':price', $data['price']);
                $this->db->bind(':filename', $data['filename']);
                if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
	}
	
	public function getReceiverChat($data){
	$this->db->query("SELECT message, sender_id, receiver_id, unique_id, timestamp from Chats where unique_id = :unique_id AND receiver_id = :receiver_id AND sender_id =:sender_id");
	$this->db->bind('receiver_id', $data['sender_id']);
	$this->db->bind(':unique_id', $data['receiver_id']);
	$this->db->bind(':sender_id', $data['receiver_id']);
	return $this->db->getAll();
	}
	
	 public function findRiderByName($name){
	    $this->db->query("SELECT email FROM Users WHERE fullname = :name");
	    $this->db->bind(':name', $name);
	   return $this->db->getOne();
    }
    
 public function findRiderByUserName($username){
	    $this->db->query("SELECT email FROM Users WHERE username = :username");
	    $this->db->bind(':username', $username);
	   return $this->db->getOne();
	    
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
    public function getRiderById($id){
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
	public function updateRiderDetails($data)
	{
	$this->db->query('UPDATE Users SET routes = :routes, vehicle_type = :vehicle_type, type_of_delivery = :type_of_delivery, days_of_work = :days_of_work, time_of_work =:time_of_work, price =:price, filename = :filename WHERE id = :id');

	            $this->db->bind(':routes', $data['routes']);
	            $this->db->bind(':vehicle_type', $data['vehicle_type']);
                $this->db->bind(':type_of_delivery', $data['type_of_delivery']);
                $this->db->bind(':days_of_work', $data['days_of_work']);
                $this->db->bind(':time_of_work', $data['time_of_work']);
                $this->db->bind(':price', $data['price']);
                $this->db->bind(':filename', $data['filename']);
                 $this->db->bind(':id', $data['id']);
                if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
	}
	    
}