<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getProducts($productId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM product WHERE IdProduct = '$productId' AND ProductStatus != '1'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getProductGallery($productId){

    global $pdo;

    $query = $pdo->query("SELECT pi.IdProductImage, pi.ProductId, pi.Path FROM `product_image` pi INNER JOIN product p ON pi.ProductId = p.IdProduct WHERE pi.ProductId = '$productId' GROUP BY pi.IdProductImage")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


?>