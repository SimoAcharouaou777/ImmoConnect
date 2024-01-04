<?php
namespace app\controller;

include __DIR__ . '/../../vendor/autoload.php';

class detailsController{
    public function details(){
        include '../../views/client/details.php';
    }
}