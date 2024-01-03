<?php
namespace app\controller;

include __DIR__ . '/../../vendor/autoload.php';

class landingController{
    public function landing(){
        include '../../views/client/landing.php';
    }
}