<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function savePromos($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $logoImage = "";

    if($filesData['Image']['name'] != ""){
       
        $logoImage = imageUpload($directoryPath,$filesData['Image']);

        if($logoImage == "Error the file exists already!"){
            $_SESSION['error_message'] = $logoImage;
        }
    }else{
        $logoImage = "";
    }

    $data = [
        'PostId' => $formDetails['Parent'],
        'UserId' => $_SESSION["admin_id"],
        'Author' => $_SESSION["admin_details"]['Username'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Image' => $logoImage,
        'Date_Validity' => $formDetails['DateValidity'],
        'Status' => $formDetails['Status'],
        'Date_added' => $date_added,
        'Date_modified' => $date_added,
    ];

    $sql = "INSERT INTO `news_promos` 
    (`PostId`, `UserId`, `Author`, `Title`, `Description`, `Image`, `Date_Validity`, `Status`, `Date_added`, `Date_modified`) 
    VALUES 
    (:PostId, :UserId, :Author, :Title, :Description, :Image, :Date_Validity, :Status, :Date_added, :Date_modified);";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Promos Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateWebinar($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $data = [
        'IdPromos' => $_GET['id_promo'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Date_Validity' => $formDetails['DateValidity'],
        'Status' => $formDetails['Status'],
        'Date_modified' => $date_added,
    ];

    $sql = "UPDATE `news_promos` SET
    `Title` = :Title, 
    `Description` = :Description, ";

    if($filesData['Image']['name'] != ""){
       
        $logoImage = imageUpload($directoryPath,$filesData['Image']);
        $data['Image'] = $logoImage;

        $sql .= "`Image` = :Image, ";

    }
   
    $sql .="
    `Date_Validity` = :Date_Validity, 
    `Status` = :Status, 
    `Date_modified` = :Date_modified WHERE IdPromos = :IdPromos";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Promos Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function deletePromos($promos_id){
    
    global $pdo;

    @$promo_data_x = getSinglePromos($promos_id);
    @unlink("../../".$promo_data_x['Image']);

    $count=$pdo->prepare("DELETE FROM `news_promos` WHERE `news_promos`.`IdPromos` = :promosId");
    $count->bindParam(":promosId",$promos_id,PDO::PARAM_INT);
    if($count->execute()){
    
        $_SESSION['success_message'] = "Promos Successfully Deleted!";
    }else{
        $_SESSION['error_message'] = "Error occured!";
    }

}

function getAllPromos(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_promos")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getSinglePromos($id_promo){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_promos WHERE IdPromos = '$id_promo'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getSinglePost($postId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_post WHERE IdNewsPost = '$postId'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getPost(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_post")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}



function imageUpload($directory,$file){

    $structure = '../../uploads/'.$directory.'/';
    $databasepath = 'uploads'.$directory.'/';
  
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