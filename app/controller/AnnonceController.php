<?php
namespace app\controller;


include __DIR__ . '/../../vendor/autoload.php';

use  app\model\Annonce;

session_start();

class CategoryController {

    public function addAnnonce(){

        require_once '../../views/admin/addCategory.php';
    }
    public function add(){

        $title=$_POST['title'];
        $description=$_POST['description'];
        $status=$_POST['status'];
        $price=$_POST['price'];
        $property_id=$_POST['property_id'];

        // if (empty($name)) {
        //     $_SESSION['error_name'] = "Name category is required";
        // } elseif (strlen($name) < 3) {
        //     $_SESSION['error_name'] = "Name must be at least 3 characters";
        // } else {
        //     $_SESSION['error_name'] = "";
        // }
        // if(empty($_SESSION['error_name'])){
            $category = new Annonce(null,$title,$description,$status,$price,$property_id);
            $category->createAnnonce();
        // }
        header('location:../Annonce');
    }
    public function getAll(){
        $category= new Annonce(null,null,null,null,null,null);
        $categories= $category->getCAnnonces();
        require_once '../../views/admin/annonce.php';
    }

    public function update(){

        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $status=$_POST['status'];
        $price=$_POST['price'];
        $property_id=$_POST['property_id'];

        // if (empty($name)) {
        //     $_SESSION['error_name'] = "Name category is required";
        // } elseif (strlen($name) < 3) {
        //     $_SESSION['error_name'] = "Name must be at least 3 characters";
        // } else {
        //     $_SESSION['error_name'] = "";
        // }
        $category = new Annonce($id,$title,$description,$status,$price,$property_id);
        // $row = $category->getCategoryById($id);
        // if($row){
            $category->updateAnnonces();
        // }
        header('location:../category');
        
    }

    public function delete(){
        $id=$_GET["id"];
        $category = new Annonce($id,null,null,null,null,null);
        $category->deleteAnnonce();
        header('location:../category');

    }

    public function getCategory()
    {
        $id=$_GET['id'];
        $category = new Annonce($id,null,null,null,null,null);
        $cat= $category->getAnnonceById();
        require_once '../../views/admin/categoryEdit.php';
    }

}

?>