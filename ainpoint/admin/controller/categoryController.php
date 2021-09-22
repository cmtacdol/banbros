<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
} 

// require_once("controller/dynamic_function.php");

function saveCategory($formDetails){

    global $pdo;

    $parentArray = array(); 
    foreach($formDetails['Parent'] as $key => $value){
        $parentArray[] = $value;
    }

    foreach($parentArray as $key => $value){
        
        $data = [
            'Parent' => $parentArray[$key],
            'CategoryName' => $formDetails['CategoryName'],
            'CategoryStatus' => $formDetails['CategoryStatus'],
        ];
    
        $sql = "INSERT INTO `category` (`BrandId`, `CategoryName`, `CategoryStatus`) VALUES (:Parent, :CategoryName, :CategoryStatus);";
    
        $stmt = $pdo->prepare($sql);
        if($stmt->execute($data)){
    
            $_SESSION['success_message'] = "Category Successfully Save!";
    
        }else{
            $_SESSION['error_message'] = "Error occured!";
    
        }
    }
    

}

function updateCategory($formDetails){

    global $pdo;

    $data = [
        'Parent' => $formDetails['Parent'],
        'CategoryName' => $formDetails['CategoryName'],
        'CategoryStatus' => $formDetails['CategoryStatus'],
    ];

    $sql = "UPDATE `category` SET 
    `BrandId` = :Parent, 
    `CategoryName` = :CategoryName, 
    `CategoryStatus` = :CategoryStatus WHERE IdCategory = '".$formDetails['CategoryId']."'";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Category Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function deleteCategory($idCategory){

    global $pdo;

    $query = $pdo->prepare("DELETE FROM `category` WHERE `category`.`IdCategory` = :id");

    if($query->execute(['id' => $idCategory])){

        $_SESSION['success_message'] = "Category Successfully Deleted!";
        return $data; 

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getBrand(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getCategoriesById($idCategory){

    global $pdo;

    $query = $pdo->query("SELECT * FROM category WHERE IdCategory = '$idCategory'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getAllCategories(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM category")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getBrandbyId($idBrand){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM brand Where IdBrand  = :id");
    $query->execute(['id' => $idBrand]);
    $data = $query->fetch();

    return $data; 
}

function getMenuById($id_nav){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM nav_menu Where IdNavMenu  = :id");
    $query->execute(['id' => $id_nav]);
    $data = $query->fetch();

    return $data; 
}

?>