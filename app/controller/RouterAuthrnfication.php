<?php

namespace app\controller;
use app\model\User;


class RouterAuthrnfication{

    
    public function indexlogin(){
        include '../../views/auth/login.php';
    }

    public function indexregister(){
        include '../../views/auth/register.php';
    }

}


?>