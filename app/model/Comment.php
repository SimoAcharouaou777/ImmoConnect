<?php

namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;
use app\controller\CommentController;
use PDO;

class Comment{


    private $db;
    private $id;
    private $comment;
    private $annonce_id;
    private $user_id;
    
    public function __construct($comment, $annonce_id, $user_id) {
        $this->db = Connection::getInstence()->getConnect();
        $this->comment = $comment;
        $this->annonce_id = $annonce_id;
        $this->user_id = $user_id;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getComment() {
        return $this->comment;
    }
    
    public function setComment($comment) {
        $this->comment = $commment;
    }
    
    public function getAnnonce_id() {
        return $this->annonce_id;
    }
    
    public function setPost_id($annonce_id) {
        $this->annonce_id = $annonce_id;
    }
    
    public function getUserId() {
        return $this->user_id;
    }
    
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getAllComments() {
        $stmt = $this->db->prepare("SELECT comments.* , users.*  , roles.name as rolename
            FROM comments
            INNER JOIN annonces ON annonces.id = comments.annonce_id
            INNER JOIN users ON users.id = comments.user_id
            INNER JOIN roles  ON roles.id = users.id");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
    }

    public function getComments(){
        $stmt = $this->db->prepare("SELECT comments.* , users.*  , roles.name as rolename
            FROM comments
            LEFT JOIN annonces ON annonces.id = comments.annonce_id
            LEFT JOIN users ON users.id = comments.user_id
            LEFT JOIN roles  ON roles.id = users.id 
            WHERE comments.annonce_id = annonces.id ");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
    }

    public function createComment() {
        $stmt = $this->db->prepare("INSERT INTO comments (comment, annonce_id, user_id) VALUES (?, ?, ?)");
        $stmt->execute([$this->comment, $this->annonce_id, $this->user_id]);
        
    }







}