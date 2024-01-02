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
        $this->db = Connection::getInstence()->getConnect();
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
        
            
                $query = "INSERT INTO `users` (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
                
                $stmt = $this->db->prepare($query);
        
              
                $stmt->bindParam(1, $this->firstname);
                $stmt->bindParam(2, $this->lastname);
                $stmt->bindParam(3, $this->email);
                $stmt->bindParam(4, $this->password);
                $stmt->execute();
           
    }
    

    public function getAllUsers()
    {
     
       
    }
}


// $user= new User("ali","email","password");