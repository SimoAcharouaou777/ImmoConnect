<?php



namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;


class User
{

    private $db;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $phone;
    private $profile;
    


    public function __construct($firstname , $lastname , $email , $password , $phone , $profile)
    {
        $this->db = Connection::getInstence();
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->profile = $profile;
    }
    public function getUserByEmail()
    {

    
     
    }

    public function createUser()
    {
       
       
    }

    public function getAllUsers()
    {
     
       
    }
}


// $user= new User("ali","email","password");