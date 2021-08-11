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
    
    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 
    
    $categoryArray = array(); 
    foreach($formDetails['Category'] as $key => $value){
        $categoryArray[] = $value;
    }
    
    $ProductImage = "";

    if($filesData['ProductImage']['name'] != ""){
       
        $ProductImage = imageUpload($directoryPath,$filesData['ProductImage']);

        if($ProductImage == "Error the file exists already!"){
            $_SESSION['error_message'] = $ProductImage;
        }
    }else{
        $ProductImage = null;
    }

    foreach($categoryArray as $key => $value){

        $data = [
            'CategoryId' => $categoryArray[$key],
            'ProductName' => $formDetails['ProductName'],
            'Image' => $ProductImage,
            'Description' => $formDetails['Description'],
            'Specification' => $formDetails['Specification'],
            'Link' => $formDetails['Link'],
            'ProductStatus' => $formDetails['ProductStatus'],
            'Date_added' => $date_added,
            'Date_modified' => $date_added,
        ];
    
        $sql = "INSERT INTO `product` 
        (`CategoryId`, `ProductName`, `Image`, `Description`, `Specification`, `Link`, `ProductStatus`, `Date_added`, `Date_modified`) 
        VALUES 
        (:CategoryId, :ProductName, :Image, :Description, :Specification, :Link, :ProductStatus, :Date_added, :Date_modified);";
    
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

function deleteImages($lastId)
{

    global $pdo;

    $count=$pdo->prepare("DELETE FROM product_image WHERE ProductId=:id");
    $count->bindParam(":id",$lastId,PDO::PARAM_INT);
    $count->execute();

}

function imageUpload($directory,$file){

    $structure = '../../uploads/product/'.$directory.'/';
    $databasepath = 'uploads/product'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png') {
    
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