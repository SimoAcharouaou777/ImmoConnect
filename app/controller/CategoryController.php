<?php
namespace app\controller;


include __DIR__ . '/../../vendor/autoload.php';

use  app\model\Category;

session_start();

class CategoryController {

    public function addCategory(){

        require_once '../../views/admin/addCategory.php';
    }
    public function add(){

        $name=$_POST['name'];

        if (empty($name)) {
            $_SESSION['error_name'] = "Name category is required";
        } elseif (strlen($name) < 3) {
            $_SESSION['error_name'] = "Name must be at least 3 characters";
        } else {
            $_SESSION['error_name'] = "";
        }
        if(empty($_SESSION['error_name'])){
            $category = new Category(null,$name);
            $category->createCategory();
        }
        header('location:../category');
    }
    public function getAll(){
        $category= new Category(null,null);
        $categories= $category->getCategories();
        require_once '../../views/admin/category.php';
    }

    public function update(){

        $id=$_POST['id'];
        $name=$_POST['name'];

        if (empty($name)) {
            $_SESSION['error_name'] = "Name category is required";
        } elseif (strlen($name) < 3) {
            $_SESSION['error_name'] = "Name must be at least 3 characters";
        } else {
            $_SESSION['error_name'] = "";
        }
        $category= new Category($id,$name);
        // $row = $category->getCategoryById($id);
        // if($row){
            $category->updateCategory();
        // }
        header('location:../category');
        
    }

    public function delete(){
        $id=$_GET["id"];
        $category = new Category($id,null);
        $category->deleteCategory($id);
        header('location:../category');

    }

    public function getCategory()
    {
        $id=$_GET['id'];
        $category = new Category($id, null);
        $cat= $category->getCategoryById($id);
        require_once '../../views/admin/categoryEdit.php';
    }

}

?>