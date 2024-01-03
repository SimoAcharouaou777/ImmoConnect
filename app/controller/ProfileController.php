<?php
namespace app\controller;
use app\model\User;
class ProfileController
{
    public function index()
    {
      
        include '../../views/client/sellerProfileEdit.php';
    }
}
