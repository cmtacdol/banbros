<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getBrandforBusinnes($ParentId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand WHERE NavId = '$ParentId' AND Status != '9'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getSingleBrand($ParentId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand WHERE Idbrand = '$ParentId'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getCategoryByBrand($BrandId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM category WHERE BrandId = '$BrandId' AND CategoryStatus != '1'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getProductByCategory($categoryId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM product WHERE CategoryId = '$categoryId' AND ProductStatus != '1'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


?>