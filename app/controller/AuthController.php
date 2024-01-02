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
        $objuser= new User($firstname,$lastname,$email,$password,null,null);
        $objuser->createUser();
            header("location:../../views/auth/login.php");
    }


    public function login($email, $password)
    {

    }

    public static function AllUsers()
    {
        $allUsers = new User($firstname, $lastname, $email,$password , $phone , $profile);
        return   $allUsers->getAllUsers();
       
    }




}





 if (isset($_POST['submit_register'])) {
        $auth = new AuthController();
        $auth->register($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"]);
    }



