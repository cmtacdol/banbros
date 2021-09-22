<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveProducts($formDetails, $filesData){

    global $pdo;

    $date_added = date("Y-m-d H:i:s"); 
    
    // $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    // $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    $directoryPath = date("YmdHis"); 
    
    $categoryArray = array(); 
    foreach($formDetails['Category'] as $key => $value){
        $categoryArray[] = $value;
    }

    foreach($categoryArray as $key => $value){

        $data = [
            'CategoryId' => $categoryArray[$key],
            'ProductName' => $formDetails['ProductName'],
            // 'Image' => $ProductImage,
            'Description' => $formDetails['Description'],
            'Specification' => $formDetails['Specification'],
            'Link' => $formDetails['Link'],
            'ProductStatus' => $formDetails['ProductStatus'],
            'Date_added' => $date_added,
            'Date_modified' => $date_added,
        ];

        if($filesData['ProductImage']['name'] != ""){
       
            $ProductImage = imageUpload($directoryPath,$filesData['ProductImage']);
            $data['Image'] = $ProductImage;

            $sql = "INSERT INTO `product` 
            (`CategoryId`, `ProductName`, `Image`, `Description`, `Specification`, `Link`, `ProductStatus`, `Date_added`, `Date_modified`) 
            VALUES 
            (:CategoryId, :ProductName, :Image, :Description, :Specification, :Link, :ProductStatus, :Date_added, :Date_modified);";
    
        }else{

            $sql = "INSERT INTO `product` 
            (`CategoryId`, `ProductName`, `Description`, `Specification`, `Link`, `ProductStatus`, `Date_added`, `Date_modified`) 
            VALUES 
            (:CategoryId, :ProductName, :Description, :Specification, :Link, :ProductStatus, :Date_added, :Date_modified);";

        }

        $stmt = $pdo->prepare($sql);
        if($stmt->execute($data)){

            $lastId = $pdo->lastInsertId();

            if (!is_null($lastId)) {

                if (isset($filesData['images'])) {
                    // deleteImages($lastId);
                    for ($a = 0; $a < count($filesData["images"]["name"]); $a++) {
        
                        $image = array(
                            "name" => $filesData["images"]["name"][$a],
                            "type" => $filesData["images"]["type"][$a],
                            "tmp_name" => $filesData["images"]["tmp_name"][$a],
                            "error" => $filesData["images"]["error"][$a],
                            "size" => $filesData["images"]["size"][$a],
                        );
        
                        $imageuploadedpath = imageUpload($directoryPath, $image);
                        saveImages($imageuploadedpath, $lastId);
        
                    }
                }
        
            }
    
            $_SESSION['success_message'] = "Product Successfully Save!";
    
        }else{
            $_SESSION['error_message'] = "Error occured!";
    
        }

    }

}

function updateProducts($formDetails, $filesData){

    global $pdo;

    $date_added = date("Y-m-d H:i:s"); 

    $directoryPath = date("YmdHis"); 

        $data = [
            'CategoryId' => $formDetails['Category'],
            'ProductName' => $formDetails['ProductName'],
            'Description' => $formDetails['Description'],
            'Specification' => $formDetails['Specification'],
            'Link' => $formDetails['Link'],
            'ProductStatus' => $formDetails['ProductStatus'],
            'Date_modified' => $date_added,
        ];

        if($filesData['ProductImage']['name'] != ""){

            $query = $pdo->prepare("SELECT * FROM product Where IdProduct  = :id");
            $query->execute(['id' => $formDetails['productid']]);
            $data_x = $query->fetch();
            $imageFile = $data_x['Image'];
            unlink("../../".$imageFile);
       
            $ProductImage = imageUpload($directoryPath,$filesData['ProductImage']);
            $data['Image'] = $ProductImage;

            $sql = "UPDATE `product` SET 
            `CategoryId` = :CategoryId, 
            `ProductName` = :ProductName, 
            `Image` = :Image, 
            `Description` = :Description, 
            `Specification` = :Specification, 
            `Link` = :Link,
            `ProductStatus` = :ProductStatus, 
            `Date_modified` = :Date_modified WHERE IdProduct = '".$formDetails['productid']."'";
    
        }else{

            $sql = "UPDATE `product` SET 
            `CategoryId` = :CategoryId, 
            `ProductName` = :ProductName, 
            `Description` = :Description, 
            `Specification` = :Specification, 
            `Link` = :Link,
            `ProductStatus` = :ProductStatus, 
            `Date_modified` = :Date_modified WHERE IdProduct = '".$formDetails['productid']."'";
        }

        $stmt = $pdo->prepare($sql);
        if($stmt->execute($data)){

            $lastId = $formDetails['productid'];

            if (!is_null($lastId)) {

                if (isset($filesData['images'])) {
                    // deleteImages($lastId);
                    for ($a = 0; $a < count($filesData["images"]["name"]); $a++) {
        
                        $image = array(
                            "name" => $filesData["images"]["name"][$a],
                            "type" => $filesData["images"]["type"][$a],
                            "tmp_name" => $filesData["images"]["tmp_name"][$a],
                            "error" => $filesData["images"]["error"][$a],
                            "size" => $filesData["images"]["size"][$a],
                        );
        
                        $imageuploadedpath = imageUpload($directoryPath, $image);
                        saveImages($imageuploadedpath, $lastId);
        
                    }
                }
        
            }
    
            $_SESSION['success_message'] = "Product Successfully Save!";
    
        }else{
            $_SESSION['error_message'] = "Error occured!";
    
        }

}


function deleteProduct($idProduct){
    
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM product Where IdProduct  = :id");
    $query->execute(['id' => $idProduct]);
    $data = $query->fetch();

    $imageFile = $data['Image'];
    unlink("../../".$imageFile);


    $count=$pdo->prepare("DELETE FROM `product` WHERE `product`.`IdProduct` = :product_id");
    $count->bindParam(":product_id",$idProduct,PDO::PARAM_INT);
    if($count->execute()){

        deleteImages($idProduct);
    
        $_SESSION['success_message'] = "Product Successfully Deleted!";
    }else{
        $_SESSION['error_message'] = "Error occured!";
    }

}

function getSingleProduct($productId){
    
    global $pdo;

    $query = $pdo->query("SELECT * FROM product WHERE IdProduct = '$productId'")->fetch();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;

    }

}

function getProductImages($productId){
    
    global $pdo;

    $query = $pdo->query("SELECT * FROM product_image WHERE ProductId = '$productId'")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;

    }

}


function getAllProduct(){
    
    global $pdo;

    $query = $pdo->query("SELECT * FROM product")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;

    }

}

function saveImages($imageuploadedpath, $lastId)
{

    global $pdo;

    $data = [
        'lastId' => $lastId,
        'imageuploadedpath' => $imageuploadedpath,
    ];

    $sql = "INSERT INTO `product_image` (`ProductId`, `Path`) VALUES (:lastId, :imageuploadedpath);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

}

function deleteImagesByIdImage($productImageId)
{

    global $pdo;

    @$query = $pdo->prepare("SELECT * FROM product_image Where IdProductImage  = :IdProductImage");
    @$query->execute(['IdProductImage' => $productImageId]);
    @$data = $query->fetchAll();
    foreach($data as $imgData){
        @unlink("../../".$imgData['Path']);
    }

    $count=$pdo->prepare("DELETE FROM product_image WHERE IdProductImage = :id");
    $count->bindParam(":id",$productImageId,PDO::PARAM_INT);
    $count->execute();

}


function deleteImages($lastId)
{

    global $pdo;

    @$query = $pdo->prepare("SELECT * FROM product_image Where ProductId  = :product_id");
    @$query->execute(['product_id' => $lastId]);
    @$data = $query->fetchAll();
    foreach($data as $imgData){
        @unlink("../../".$imgData['Path']);
    }

    $count=$pdo->prepare("DELETE FROM product_image WHERE ProductId=:id");
    $count->bindParam(":id",$lastId,PDO::PARAM_INT);
    $count->execute();

}

function getCategoriesBySpecificId($idCategory){

    global $pdo;

    $query = $pdo->query("SELECT * FROM `category` c INNER JOIN brand b ON c.BrandId = b.IdBrand WHERE c.IdCategory = '$idCategory'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function imageUpload($directory,$file){

    $structure = '../../uploads/product/'.$directory.'/';
    $databasepath = 'uploads/product/'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png' || $mimetype == 'video/mp4' || $mimetype == 'video/mp4'|| $mimetype == 'video/m4v') {
    
    if (!file_exists($structure)) {
      if (!mkdir($structure, 0777, true)) {
      
      }else{
        move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
        return $databasepath.$file["name"];
      }
    
      }else{
        move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
        return $databasepath.$file["name"];
      }
    } else {
    echo 'The source file type ' . $mimetype . ' is not supported';
    die();
    }
  
  }
?>