<?php

namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;
use PDO;

class Comment{
    private $id ; 
    private $comment ;  
    private $db;
     
    public function __construct($id , $comment , $db){
        $this->db = Connection::getInstence()->getConnect();
        $this->id = $id ; 
        $this->comment = $comment;
    }
    
    public static function creatComment(){

    }
   








}