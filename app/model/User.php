<?php

namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;
 

class User
{

    private $db;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $phone;
    private $profile;

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getProfile()
    {
        return $this->profile;
    }

    

    public function __construct($firstname, $lastname, $email, $password, $phone, $profile)
    {
        $this->db = Connection::getInstence()->getConnect();
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->profile = $profile;
    }
    public static function getUserByEmail($email)
    {
        $sql = "SELECT users.*, roles.name FROM users WHERE email = :email
        INNER JOIN roles ON users.role_id = roles.id";
         $statement = $db->prepare($sql);
         $statement->bindParam(':email', $email, PDO::PARAM_STR);
         if ($statement) {
            $statement->execute();
            $resultInstances = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($resultInstances) {
                $users = [];
                foreach ($resultInstances as $key => $result) {
                    $userInstance = new User($result['id'], $result['username'], $result['fullname'],
                        $result['email'], $result['password'], $result['phone'],$result['profile']);
                    $users[] = $userInstance;
                }
                return $users;
            } else {
                return null;
            }
        } else {
            $errorInfo = $connect->errorInfo();
            echo "error: " . $errorInfo[2];
        }


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
    

    public static function getAllUsers()
    {
        $sql = "SELECT users.*, roles.name FROM users
        INNER JOIN roles ON users.role_id = roles.id";
         $statement = $db->prepare($sql);
         if ($statement) {
            $statement->execute();
            $resultInstances = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($resultInstances) {
                $users = [];
                foreach ($resultInstances as $key => $result) {
                    $userInstance = new User($result['id'], $result['username'], $result['fullname'],
                        $result['email'], $result['password'], $result['phone'],$result['profile']);
                    $users[] = $userInstance;
                }
                return $users;
            } else {
                return null;
            }
        } else {
            $errorInfo = $connect->errorInfo();
            echo "error: " . $errorInfo[2];
        }
    }
}


