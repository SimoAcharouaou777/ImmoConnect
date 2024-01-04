<?php
namespace app\controller;


include __DIR__ . '/../../vendor/autoload.php';

use  app\model\Comment;

session_start();

class CommentController{

    public function creatComment(){
        $comment = $_POST['comment'];
        $userid = $_POST['userid'];
        $annonceid= $_POST['annonceid'];
        $comment = new Comment($comment,$annonceid ,$userid);
        $comment = $comment->createComment();

        header("Location:../user/client/detail/annonce?id=$annonceid") ;
    }
    public function getAllComments(){
        $id = $_GET['id'];
        $comment= new Comment($id,null,null,null,null,null);
        $comment= $comment->getComments();
        require_once '../../views/admin/annonce.php';
    }
    
}