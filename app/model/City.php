<?php



namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;


class City
{

    private $db;
    private $id;
    private $name;
 

    public function __construct($id,$name)
    {
        $this->db = Connection::getInstence()->getConnect();
        $this->name = $name;
        $this->id = $id;

    }
    public function AllCities()
    {

        $stmt = $this->db->prepare("SELECT * from cities ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;

        
    }

    public function createCities()
    {
        $stmt = $this->db->prepare("INSERT INTO cities(name)  VALUES (?)");
        $stmt->execute([$this->name]);
        // $lastInsertId = $this->db->lastInsertId();
        // return $lastInsertId;
       
    }

    public function getCityById()
    {

        $stmt = $this->db->prepare("select * from  users where id = ? ");
        $stmt->execute([$this->id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function updateCity()
    {

        $stmt = $this->db->prepare("update cities set name = ? where id = ? ");
        $stmt->execute([$this->name,$this->id]);
        // $result = $stmt->fetch(PDO::FETCH_OBJ);
        // return $result;
    }

    public function deleteCity()
    {

        $stmt = $this->db->prepare("delete from cities  where id = ? ");
        $stmt->execute([$this->id]);
        // $result = $stmt->fetch(PDO::FETCH_OBJ);
        // return $result;
    }
}


// $user= new User("ali","email","password");