<?php

namespace app\controller;

include __DIR__ . '/../../vendor/autoload.php';

use app\model\City;

// session_start();



// spl_autoload_register(function ($class) {
//     include  __DIR__ .'/../'.$class.'.php'; 
// });







class CityController
{
    public function addCity($name)
    {
        if (empty($name)) {
            $_SESSION['error_name'] = "Name city is required";
        } elseif (strlen($name) < 3) {
            $_SESSION['error_name'] = "Name city  must be at least 3 characters";
        } else {
            $_SESSION['error_name'] = "";
        }


        if (empty($_SESSION['error_name'])) {
            $addCity = new City(null, $name);
            $addCity->createCities();
        } else {
            header("location:../../views/auth/register.php");
            exit();
        }
    }


    public function getAllCities()
    {
        $City = new City(null, null);
        $cities= $City->AllCities();
        require_once '../../views/admin/city.php';
    }

    public function getCity($id)
    {
        $addCity = new City($id, null);
        return $addCity->getCityById();
    }

    public function updateCity($name, $id)
    {

        $City = new City($id, $name);
        // $ville = $City->getCityById();

        // if ($ville) {
            if (empty($name)) {
                $_SESSION['error_name'] = "Name city is required";
            } elseif (strlen($name) < 3) {
                $_SESSION['error_name'] = "Name city  must be at least 3 characters";
            } else {
                $_SESSION['error_name'] = "";
            }
            if (empty($_SESSION['error_name'])) {
                $City->updateCity();
            } else {
                exit();
            }
        // }
    }

    public function deleteCity($id)
    {
        $addCity = new City($id, null);
        return $addCity->deleteCity();
    }
}








// $getAllUsers = new CityController();
// var_dump($getAllUsers->updateCity("beni mellal" ,2));