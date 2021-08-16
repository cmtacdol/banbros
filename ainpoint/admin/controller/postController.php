<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function savePost($formDetails, $filesData){

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
        'NavId' => $formDetails['Parent'],
        'Title' => $formDetails['Title'],
        'Image' => $logoImage,
        'Description' => $formDetails['Description'],
        'PostStatus' => $formDetails['Status'],
        'Date_added' => $date_added,
        'Date_modified' => $date_added,
    ];

    $sql = "INSERT INTO `news_post` (`NavId`, `Title`, `Image`, `Description`, `PostStatus`, `Date_added`, `Date_modified`) 
    VALUES 
    (:NavId, :Title, :Image, :Description, :PostStatus, :Date_added, :Date_modified);";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Post Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function editPost($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $data = [
        'NavId' => $formDetails['Parent'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'PostStatus' => $formDetails['Status'],
        'Date_modified' => $date_added,
    ];

    $sql = "UPDATE `news_post` SET 
        `NavId` = :NavId, 
        `Title` = :Title, ";

    if($filesData['Image']['name'] != ""){

        $post = getSinglePost($formDetails['idnewspost']);
        @unlink('../../'.$post['Image']);
       
        $logoImage = imageUpload($directoryPath,$filesData['Image']);
        $data['Image'] = $logoImage;
        
        $sql .= "`Image` = :Image, ";
    }

    $sql .= "
    `Description` = :Description, 
    `PostStatus` = :PostStatus, 
    `Date_modified` = :Date_modified WHERE IdNewsPost = '".$formDetails['idnewspost']."'";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Post Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getSinglePost($postId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_post WHERE IdNewsPost = '$postId'")->fetch();

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


function getMenu(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM nav_menu WHERE NavName = 'News'")->fetchAll();

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