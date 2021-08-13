<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveBrand($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $logoImage = "";
    $bannerImage = "";

    if($filesData['LogoImage']['name'] != ""){
       
        $logoImage = imageUpload($directoryPath,$filesData['LogoImage']);

        if($logoImage == "Error the file exists already!"){
            $_SESSION['error_message'] = $logoImage;
        }
    }else{
        $logoImage = null;
    }

    if($filesData['bannerImage']['name'] != ""){
       
        $bannerImage = imageUpload($directoryPath,$filesData['bannerImage']);

        if($bannerImage == "Error the file exists already!"){
            $_SESSION['error_message'] = $bannerImage;
        }
    }else{
        $bannerImage = null;
    }

    $naveIdArray = array();
    foreach($formDetails['Parent'] as $key => $value){
        $naveIdArray[] = $value;
    }

    foreach($naveIdArray as $key => $value){

        $data = [
            'NavId' => $naveIdArray[$key],
            'BrandName' => $formDetails['BrandName'],
            'Logo' => $logoImage,
            'Banner' => $bannerImage,
            'Description' => $formDetails['Content'],
            'Status' => $formDetails['Status'],
            'Date_added' => $date_added,
            'Date_modified' => $date_added,
        ];

        $sql = "INSERT INTO `brand` (`NavId`, `BrandName`, `Logo`, `Banner`, `Description`, `Status`, `Date_added`, `Date_modified`) 
        VALUES 
        (:NavId, :BrandName, :Logo, :Banner, :Description, :Status, :Date_added, :Date_modified);";
    
        $stmt = $pdo->prepare($sql);
        if($stmt->execute($data)){
    
            $_SESSION['success_message'] = "Brand Successfully Save!";
    
        }else{
            $_SESSION['error_message'] = "Error occured!";
    
        }

    }

}

function updateBrand($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $data = [
        'NavId' => $formDetails['Parent'],
        'BrandName' => $formDetails['BrandName'],
        'Description' => $formDetails['Content'],
        'Status' => $formDetails['Status'],
        'Date_added' => $date_added,
        'Date_modified' => $date_added,
    ];
    $query = $pdo->query("SELECT * FROM brand WHERE IdBrand = '".$formDetails['brandId']."'")->fetch();

    if($filesData['LogoImage']['name'] != ""){

        @unlink("../../".$query['Logo']);
       
        $logoImage = imageUpload($directoryPath,$filesData['LogoImage']);

        $data['Logo'] = $logoImage;

        $sql = "UPDATE `brand` SET
        `NavId` = :NavId, 
        `BrandName` = :BrandName, 
        `Logo` = :Logo, 
        `Description` = :Description, 
        `Status` = :Status, 
        `Date_added` = :Date_added, 
        `Date_modified` = :Date_modified WHERE IdBrand = '".$formDetails['brandId']."'";

    }
    else if($filesData['bannerImage']['name'] != ""){

        @unlink("../../".$query['Banner']);

        $bannerImage = imageUpload($directoryPath,$filesData['bannerImage']);
        $data['Banner'] = $bannerImage;

        $sql = "UPDATE `brand` SET
        `NavId` = :NavId, 
        `BrandName` = :BrandName, 
        `Banner` = :Banner, 
        `Description` = :Description, 
        `Status` = :Status, 
        `Date_added` = :Date_added, 
        `Date_modified` = :Date_modified WHERE IdBrand = '".$formDetails['brandId']."'";

    }else{

        $sql = "UPDATE `brand` SET
        `NavId` = :NavId, 
        `BrandName` = :BrandName, 
        `Description` = :Description, 
        `Status` = :Status, 
        `Date_added` = :Date_added, 
        `Date_modified` = :Date_modified WHERE IdBrand = '".$formDetails['brandId']."'";

    }
    
        $stmt = $pdo->prepare($sql);
        if($stmt->execute($data)){
    
            $_SESSION['success_message'] = "Brand Successfully Updated!";
    
        }else{
            $_SESSION['error_message'] = "Error occured!";
    
        }


}

function deleteBrand($idBrand){

    global $pdo;
    
    $sql = "UPDATE `brand` SET `Status` = '9' WHERE IdBrand = :id";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute(['id' => $idBrand])){

        $_SESSION['success_message'] = "Brand Successfully Deleted!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getSingleBrand($brandId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand WHERE IdBrand = '$brandId'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getBrand(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM brand WHERE Status != '9'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


function getMenu(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM nav_menu WHERE NavName = 'Business' || NavName = 'Consumer'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


function imageUpload($directory,$file){

    $structure = '../../uploads/brand/'.$directory.'/';
    $databasepath = 'uploads/brand'.$directory.'/';
  
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