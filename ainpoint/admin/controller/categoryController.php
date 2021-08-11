<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveCategory($formDetails){

    global $pdo;

    $data = [
        'Parent' => $formDetails['Parent'],
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

function getBrand(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand")->fetchAll();

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

?>