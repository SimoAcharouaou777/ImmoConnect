<?php 
namespace app\model;

include __DIR__ . '/../../vendor/autoload.php';

use app\connection\Connection;

use PDO;

class Property {
    private $id;
    private $address;
    private $imageA;
    private $imageB;
    private $imageC;
    private $imageD;
    private $imageE;
    private $description;
    private $bathroom;
    private $room;
    private $garage;
    private $size;
    private $city_id;
    private $category_id;
    private $seller_id;
    private $db;

    public function __construct($id, $address, $imageA, $imageB, $imageC, $imageD, $imageE, $description, $bathroom, $room, $garage, $size, $city_id, $category_id, $seller_id) {
        $this->db = Connection::getInstence()->getConnect();
        $this->id = $id;
        $this->address = $address;
        $this->imageA = $imageA;
        $this->imageB = $imageB;
        $this->imageC = $imageC;
        $this->imageD = $imageD;
        $this->imageE = $imageE;
        $this->description = $description;
        $this->bathroom = $bathroom;
        $this->room = $room;
        $this->garage = $garage;
        $this->size = $size;
        $this->city_id = $city_id;
        $this->category_id = $category_id;
        $this->seller_id = $seller_id;
    }

    // Getters and setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getImageA() {
        return $this->imageA;
    }

    public function setImageA($imageA) {
        $this->imageA = $imageA;
    }

    public function getImageB() {
        return $this->imageB;
    }

    public function setImageB($imageB) {
        $this->imageB = $imageB;
    }

    public function getImageC() {
        return $this->imageC;
    }

    public function setImageC($imageC) {
        $this->imageC = $imageC;
    }

    public function getImageD() {
        return $this->imageD;
    }

    public function setImageD($imageD) {
        $this->imageD = $imageD;
    }

    public function getImageE() {
        return $this->imageE;
    }

    public function setImageE($imageE) {
        $this->imageE = $imageE;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getBathroom() {
        return $this->bathroom;
    }

    public function setBathroom($bathroom) {
        $this->bathroom = $bathroom;
    }

    public function getRoom() {
        return $this->room;
    }

    public function setRoom($room) {
        $this->room = $room;
    }

    public function getGarage() {
        return $this->garage;
    }

    public function setGarage($garage) {
        $this->garage = $garage;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getCityId() {
        return $this->city_id;
    }

    public function setCityId($city_id) {
        $this->city_id = $city_id;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    public function getSellerId() {
        return $this->seller_id;
    }

    public function setSellerId($seller_id) {
        $this->seller_id = $seller_id;
    }


    public function addProperty()
    {
        $stmt = $this->db->prepare( "INSERT INTO properties (address, imageA, imageB, imageC, imageD, imageE, description, bathroom, room, garage, size, city_id, category_id, seller_id)
        VALUES (:address, :imageA, :imageB, :imageC, :imageD, :imageE, :description, :bathroom, :room, :garage, :size, :city_id, :category_id, :seller_id)");
         $stmt->bindParam(':address', $this->address);
         $stmt->bindParam(':imageA', $this->imageA);
         $stmt->bindParam(':imageB', $this->imageB);
         $stmt->bindParam(':imageC', $this->imageC);
         $stmt->bindParam(':imageD', $this->imageD);
         $stmt->bindParam(':imageE', $this->imageE);
         $stmt->bindParam(':description', $this->description);
         $stmt->bindParam(':bathroom', $this->bathroom);
         $stmt->bindParam(':room', $this->room);
         $stmt->bindParam(':garage', $this->garage);
         $stmt->bindParam(':size', $this->size);
         $stmt->bindParam(':city_id', $this->city_id);
         $stmt->bindParam(':category_id', $this->category_id);
         $stmt->bindParam(':seller_id', $this->seller_id);
         
         $stmt->execute();       
    }

    


    public function getPropertyById($id){
        $query = "SELECT * from properties where id =?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function updateProperty(){
        $query = "UPDATE properties
        SET address = :address, imageA = :imageA, imageB = :imageB, imageC = :imageC, imageD = :imageD, imageE = :imageE, description = :description, bathroom = :bathroom, room = :room, garage = :garage, size = :size, city_id = :city_id, category_id = :category_id, seller_id = :seller_id
        WHERE id = :id";
        $stmt = $this->db->prepare($query);
       
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':imageA', $this->imageA);
        $stmt->bindParam(':imageB', $this->imageB);
        $stmt->bindParam(':imageC', $this->imageC);
        $stmt->bindParam(':imageD', $this->imageD);
        $stmt->bindParam(':imageE', $this->imageE);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':bathroom', $this->bathroom);
        $stmt->bindParam(':room', $this->room);
        $stmt->bindParam(':garage', $this->garage);
        $stmt->bindParam(':size', $this->size);
        $stmt->bindParam(':city_id', $this->city_id);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':seller_id', $this->seller_id);
        $stmt->bindParam(':id', $this->id);
        
        $stmt->execute();
    
    }

    public function getProperties()
{
    $stmt = $this->db->prepare("SELECT p.*, u.firstName as firstName, u.lastName as lastName, ca.name AS category_name, c.name AS city_name 
        FROM properties p 
        JOIN users u ON u.id = p.seller_id
        JOIN cities c ON c.id = p.city_id
        JOIN categories ca ON ca.id = p.category_id");

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}



    public function deleteProperty($id){
        $query = "DELETE from properties where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

}




?>