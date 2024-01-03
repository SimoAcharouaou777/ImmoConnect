<?php

namespace app\controller;

include __DIR__ . '/../../vendor/autoload.php';

use app\model\Property;

class PropertyController{

    public function addProperty($address, $imageA, $imageB, $imageC, $imageD, $imageE, $description, $bathroom, $room, $garage, $size, $city_id, $category_id, $seller_id)
    {
        if (empty($address)) {
            $_SESSION['error_address'] = "address is required";
        } 
        if (empty($imageA)) {
            $_SESSION['error_image'] = " image is required";
        } 
        if (empty($imageB)) {
            $_SESSION['error_image'] = " image is required";
        }  
        if (empty($imageC)) {
            $_SESSION['error_image'] = " image is required";
        } 
         if (empty($imageD)) {
            $_SESSION['error_image'] = " image is required";
        }  
        if (empty($imageE)) {
            $_SESSION['error_image'] = " image is required";
        } 
        if (empty($bathroom)) {
            $_SESSION['error_bathroom'] = "number of bathrooms is required";
        } 
        if (empty($room)) {
            $_SESSION['error_room'] = "number rooms is required";
        } 
        if (empty($garage)) {
            $_SESSION['error_garage'] = "number garages is required";
        } 
        if (empty($size)) {
            $_SESSION['error_size'] = "size is required";
        } 
         



        if (empty($_SESSION['error_address']) && empty($_SESSION['error_image']) && empty($_SESSION['error_bathroom']) && empty($_SESSION['error_room']) && empty($_SESSION['error_garage']) && empty($_SESSION['error_size'])) {
            $property = new Property(null, $address, $imageA, $imageB, $imageC, $imageD, $imageE, $description, $bathroom, $room, $garage, $size, $city_id, $category_id, $seller_id);
            $property->addProperty();
        } 
    }



    
    public function updateProperty($id, $address, $imageA, $imageB, $imageC, $imageD, $imageE, $description, $bathroom, $room, $garage, $size, $city_id, $category_id, $seller_id)
    {
        if (empty($address)) {
            $_SESSION['error_address'] = "address is required";
        } 
        if (empty($imageA)) {
            $_SESSION['error_image'] = " image is required";
        } 
        if (empty($imageB)) {
            $_SESSION['error_image'] = " image is required";
        }  
        if (empty($imageC)) {
            $_SESSION['error_image'] = " image is required";
        } 
         if (empty($imageD)) {
            $_SESSION['error_image'] = " image is required";
        }  
        if (empty($imageE)) {
            $_SESSION['error_image'] = " image is required";
        } 
        if (empty($bathroom)) {
            $_SESSION['error_bathroom'] = "number of bathrooms is required";
        } 
        if (empty($room)) {
            $_SESSION['error_room'] = "number rooms is required";
        } 
        if (empty($garage)) {
            $_SESSION['error_garage'] = "number garages is required";
        } 
        if (empty($size)) {
            $_SESSION['error_size'] = "size is required";
        } 
         



        if (empty($_SESSION['error_address']) && empty($_SESSION['error_image']) && empty($_SESSION['error_bathroom']) && empty($_SESSION['error_room']) && empty($_SESSION['error_garage']) && empty($_SESSION['error_size'])) {
            $property = new Property($id, $address, $imageA, $imageB, $imageC, $imageD, $imageE, $description, $bathroom, $room, $garage, $size, $city_id, $category_id, $seller_id);
            $property->updateProperty();
        } 
    }



    public function getAllProperties()
    {
        $property = new Property(null, null, null, null, null, null, null, null, null, null, null,null, null, null,null);
        $property->getproperties();
    }

    public function deleteProperty($id)
    {
        $property = new Property(null, null, null, null, null, null, null, null, null, null, null,null, null, null,null);
        $property->deleteProperty($id);
    }

    public function getProperty($id)
    {
        $property = new Property($id, null, null, null, null, null, null, null, null, null, null,null, null, null,null);
        return $addCity->getPropertyById($id);
    }




}



?>