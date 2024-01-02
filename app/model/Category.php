<?php



namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;


class Category
{

    private $db;
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->db = Connection::getInstence()->getConnect();
        $this->id = $id;
        $this->name = $name;
     
    }

    public function createCategory()
    {
        $stmt = $this->db->prepare("INSERT INTO categories(name)  VALUES (?)");
        $stmt->execute([$this->name]);
       
    }

    public function getCategoryById($id){
        $query = "SELECT * from categories where id =?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getCategories()
    {
        $stmt = $this->db->prepare("SELECT * from  categories");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function updateCategory(){
        $query = "UPDATE categories 
        set  name = :name
        where id= :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->execute();
    }

    public function deleteCategory($id){
        $query = "DELETE from categories where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}



