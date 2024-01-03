<?php

namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;

class Message 
{
        private $db;
        private $id;
        private $message;
        private $receiver_id;
        private $transmitter_id;
        
        public function __construct($message, $receiver_id, $transmitter_id) {
            $this->db = Connection::getInstence()->getConnect();
            $this->message = $message;
            $this->receiver_id = $receiver_id;
            $this->transmitter_id = $transmitter_id;
        }
        
        public function getId() {
            return $this->id;
        }
        
        public function getMessage() {
            return $this->message;
        }
        
        public function setMessage($message) {
            $this->message = $message;
        }
        
        public function getReceiverId() {
            return $this->receiver_id;
        }
        
        public function setReceiverId($receiver_id) {
            $this->receiver_id = $receiver_id;
        }
        
        public function getTransmitterId() {
            return $this->transmitter_id;
        }
        
        public function setTransmitterId($transmitter_id) {
            $this->transmitter_id = $transmitter_id;
        }


         

    public function getAllMessages() {
        $stmt = $this->db->prepare("SELECT m.*, ur.firstname as receiver_name, ut.firstname as transmitter_name
            FROM messages m
            INNER JOIN users ur ON ur.id = m.receiver_id
            INNER JOIN users ut ON ut.id = m.transmitter_id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function createMessage() {
        $stmt = $this->db->prepare("INSERT INTO messages (message, receiver_id, transmitter_id) VALUES (?, ?, ?)");
        $stmt->execute([$this->message, $this->receiver_id, $this->transmitter_id]);
        $lastInsertId = $this->db->lastInsertId();
        return $lastInsertId;
    }
    
    public function getMessageById() {
        $stmt = $this->db->prepare("SELECT m.*, ur.firstname as receiver_name, ut.firstname as transmitter_name
        FROM messages m
        INNER JOIN users ur ON ur.id = m.receiver_id
        INNER JOIN users ut ON ut.id = m.transmitter_id WHERE m.id = ?");
        $stmt->execute([$this->id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function deleteMessage() {
        $stmt = $this->db->prepare("DELETE FROM messages WHERE id = ?");
        $stmt->execute([$this->id]);
    }
    // public function updateMessage() {
    //     $stmt = $this->db->prepare("UPDATE messages SET message = ?, receiver_id = ?, transmitter_id = ? WHERE id = ?");
    //     $stmt->execute([$this->message, $this->receiver_id, $this->transmitter_id, $this->id]);
    // }
    
    
    

}


?>