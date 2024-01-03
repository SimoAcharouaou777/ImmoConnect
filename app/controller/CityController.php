<?php

namespace app\controller;

include __DIR__ . '/../../vendor/autoload.php';

use app\model\City;





class CityController
{

    public function addCity()
    {

        require_once '../../views/admin/addCity.php';
    }
    public function add()
    {
        $name = $_POST['name'];

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
            // header("location:../../views/auth/register.php");
            // header('location:../city');
        }
        header('location:../city');
    }


    public function getAllCities()
    {
        $City = new City(null, null);
        $cities = $City->AllCities();
        require_once '../../views/admin/city.php';
    }

    public function getCity()
    {
        $id = $_GET['id'];
        $addCity = new City($id, null);
        $city = $addCity->getCityById();
        require_once '../../views/admin/cityEdit.php';
        // echo "ali";
        // var_dump($city);
    }

    public function updateCity()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
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
            // exit();
        }
        // }

        header('location:../city');
    }

    public function deleteCity()
    {
        $id = $_GET["id"];
        $addCity = new City($id, null);
        $addCity->deleteCity();
        header('location:../city');
    }
}








// $getAllUsers = new CityController();
// var_dump($getAllUsers->updateCity("beni mellal" ,2));