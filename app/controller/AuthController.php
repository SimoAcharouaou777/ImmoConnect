<?php

namespace app\controller;


include __DIR__ . '/../../vendor/autoload.php';

use app\model\User;

 session_start();


class AuthController
{


    public function Register($firstname,$lastname,$email,$password)
    {
        $password = password_hash($password,PASSWORD_DEFAULT);
        $objuser= new User(null,$firstname,$lastname,$email,$password,null,null);
        $objuser->createUser();
            header("location:../../views/auth/login.php");
    }


    public function login($email, $password)
    {
        if(empty($email) || empty($password)){
            echo"von avez pas enregistrer le nom et prenom";
        }else {
            $obj= new User(null,null,null,$email,$password,null,null);
            $data=$obj->getUserByUsername();

        }
        
        if (empty($data)) {
            echo"email not on data base";
        }elseif(password_verify($password,$data['password'])){
            $_SESSION['email'] = $email;

            if ($data['role_name']=='admin') {
                    header("location: ../../");

                }elseif($data['role_name']=='user'){
                    header("location: ../../index.php");

                }elseif($data['role_name']=='seller'){
                    header("location: ../../");
            }   
        }
      }


    public static function AllUsers()
    {
        $allUsers = new User(null,null, null, null,null , null , null);
        return   $allUsers->getAllUsers();
       
    }
    public static function updateUser(){
        $id = $_POST['id'];
        $firstname =  $_POST["firstname"];
         $lastname =  $_POST["lastname"];
         $email =  $_POST["email"];
         $phone = $_POST['phone'];
         $profile = $_POST['profile'];
        User::updateUser($id,$firstname , $lastname,$email , null , $phone , $profile);
    }

    public static function showUserByEmail(){
        
    }


}




 if (isset($_POST['submit_register'])) {
        $auth = new AuthController();
        $auth->register($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"]);
    }

    if (isset($_POST['login_submit'])) {
        $auth = new AuthController();
        $res= $auth->login($_POST["email"],$_POST["password"]);
        // var_dump($res);
    }





