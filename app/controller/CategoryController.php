<?php
namespace app\controller;


include __DIR__ . '/../../vendor/autoload.php';

use  app\model\Category;

session_start();

class CategoryController {

    public function add($name){
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
    }
    public function getAll(){
        $category= new Category(null,null);
        $categories= $category->getCategories();
        require_once '../../views/admin/category.php';
    }

    public function update($id,$name){
        if (empty($name)) {
            $_SESSION['error_name'] = "Name category is required";
        } elseif (strlen($name) < 3) {
            $_SESSION['error_name'] = "Name must be at least 3 characters";
        } else {
            $_SESSION['error_name'] = "";
        }
        $category= new Category($id,$name);
        $row = $category->getCategoryById($id);
        if($row){
            $category->updateCategory();
        }
        
    }

    public function delete($id){
        $category = new Category($id,null);
        $category->deleteCategory($id);
    }

}

?>