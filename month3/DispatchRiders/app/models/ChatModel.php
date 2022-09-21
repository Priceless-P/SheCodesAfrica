<?php

class ChatModel{
	private $db;
	
	public function __construct(){
	$this->db = new Database;
	}
	
	public function getSenderChat($data){
    $this->db->query("SELECT * FROM chats LEFT JOIN Users ON Users.unique_id =chats.incoming_msg_id
                WHERE (outgoing_msg_id = :sessionid AND incoming_msg_id =:incomingId)
                OR (outgoing_msg_id = :chatUserID AND incoming_msg_id =:currentUser) ORDER BY chats.id");
    $this->db->bind(':sessionid', $data['sessionid']);
	$this->db->bind(':incomingId', $data['incomingId']);
	$this->db->bind(':chatUserID', $data['chatUserID']);
	$this->db->bind(':currentUser', $data['currentUser']);
	return $this->db->getAll();
	}
	
	public function insertChats($data)
	{
	   $this->db->query("INSERT INTO chats (outgoing_msg_id, incoming_msg_id, message)
	            VALUES(:outgoing_msg_id, :incoming_msg_id, :message)");
	            $this->db->bind(':outgoing_msg_id', $data['chatUserID']);
	            $this->db->bind(':incoming_msg_id', $data['incomingId']);
	            $this->db->bind(':message', $data['message']);
	            
	            if($this->db->execute()){
                    return true;
                    }else{
                         return false;
                         }
	}
	
	public function getRiderById($id){
	$this->db->query("SELECT * FROM Users WHERE id = :id");
	$this->db->bind('id', $id);
	return $this->db->getOne();
	}
		public function getUniqueId($id){
	$this->db->query("SELECT unique_id FROM Users WHERE id = :id");
	$this->db->bind('id', $id);
	return $this->db->getOne();
	}
}