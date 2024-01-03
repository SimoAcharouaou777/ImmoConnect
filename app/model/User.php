<?php

namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;
use PDO;

class User
{

    private $db;
    private $id;
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

    public function __construct($id, $firstname, $lastname, $email, $password, $phone, $profile)
    {
        $this->db = Connection::getInstence()->getConnect();
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->profile = $profile;
    }
    public  function getUserByEmail($email)
    {
        $sql = "SELECT users.*, roles.name FROM users WHERE email = :email
        INNER JOIN roles ON users.role_id = roles.id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        if ($statement) {
            $statement->execute();
            $resultInstances = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($resultInstances) {
                $users = [];
                foreach ($resultInstances as $key => $result) {
                    $userInstance = new User($result['id'], $result['firstname'], $result['fullname'],
                        $result['email'], $result['password'], $result['phone'], $result['profile']);
                    $users[] = $userInstance;
                }
                return $users;
            } else {
                return null;
            }
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
        $sql = "SELECT users.*, roles.name as rolename FROM users
        LEFT JOIN roles ON users.role_id = roles.id";
        $db = Connection::getInstence()->getConnect();
        $statement = $db->prepare($sql);
        if ($statement) {
            $statement->execute();
            $resultInstances = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($resultInstances) {
                $users = [];
                foreach ($resultInstances as $key => $result) {
                    $userInstance = new User($result['id'], $result['firstname'], $result['lastname'],
                        $result['email'], $result['password'], $result['phone'], $result['profile']);
                    $users[] = $userInstance;
                }
                return $users;
            } else {
                return null;
            }
        }
    }
    public static function updateUser($id,$firstname , $lastname,$email , $password , $phone , $profile)
    {
        $db = Connection::getInstence()->getConnect();
        $sql = "UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, password = :password,
            phone = :phone, profile = :profile WHERE id = :id";
        $statemnt = $db->prepare($sql);

        $statemnt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $statemnt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $statemnt->bindParam(':email', $email, PDO::PARAM_STR);
        $statemnt->bindParam(':password', $password, PDO::PARAM_STR);
        $statemnt->bindParam(':phone', $phone, PDO::PARAM_INT);
        $statemnt->bindParam(':profile', $profile, PDO::PARAM_INT);
        $statemnt->bindParam(':id', $id, PDO::PARAM_INT);
        $statemnt->execute();
    }
}

