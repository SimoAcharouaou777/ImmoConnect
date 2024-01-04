<?php



namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;


class Annonce
{

    private $db;
    private $id;
    private $title;
    private $description;
    private $status;
    private $price;
    private $property_id;

    public function __construct($id, $title,$description,$status,$price,$property_id)
    {
        $this->db = Connection::getInstence()->getConnect();
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->price = $price;
        $this->property_id = $property_id;
     
    }


    public function createAnnonce()
    {
        $stmt = $this->db->prepare("INSERT INTO `annonces` ( `title`, `description`, `status`, `price`, `property_id`) VALUES (?,?,?,?,?)");
        $stmt->execute([$this->title,$this->description,$this->status,$this->price,$this->property_id]);
       
    }

    public function getAnnonceById(){

        $query = "SELECT a.* , a.id as annId, p.*, u.*, c.name as city, ca.name as category from  annonces a 
        join properties p on p.id = a.property_id
        join cities c on p.city_id = c.id
        join categories ca on p.category_id = ca.id
        join users u on p.seller_id = u.id
        where a.id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->id]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;

    }

    // public function getAnnonces()
    // {
    //     $stmt = $this->db->prepare("SELECT a.* , p.*, u.* , c.name as city, ca.name as category from  annonces a 
    //     join properties p on p.id = a.property_id
    //     join cities c on p.city_id = c.id
    //     join categories ca on p.category_id = ca.id
    //     join users u on p.seller_id = u.id");
    //     $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    public function getAnnonces()
{
    try {
        $stmt = $this->db->prepare("SELECT a.* , a.id as annId, p.*, u.*, c.name as city, ca.name as category from  annonces a 
            join properties p on p.id = a.property_id
            join cities c on p.city_id = c.id
            join categories ca on p.category_id = ca.id
            join users u on p.seller_id = u.id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result ?: [];
         
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return []; 
    }
}


    public function updateAnnonces(){
        $query = "UPDATE annonces SET title=?,description=?,status=?,price=?,date=?,property_id=? WHERE id =?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->title,$this->description,$this->status,$this->price,$this->property_id,$this->id]);
    }

    public function deleteAnnonce(){
        $query = "DELETE from annonces where id=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->id]);
    }
}




