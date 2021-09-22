<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveEvents($formDetails, $filesData){

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

    $time = strtotime($formDetails['TimeWebinar']);
    $data = [
        'PostId' => $formDetails['Parent'],
        'UserId' => '1',
        'Author' => 'Author dummy',
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Image' => $logoImage,
        'Date' => $formDetails['DateWebinar'],
        'Time' => date("h.i A", $time),
        'Venue' => $formDetails['VenueWebinar'],
        'Status' => $formDetails['Status'],
        'Date_added' => $date_added,
        'Date_modified' => $date_added,
    ];

    $sql = "INSERT INTO `news_events` 
    (`PostId`, `UserId`, `Author`, `Title`, `Description`, `Image`, `Date`, `Time`, `Venue`, `Status`, `Date_added`, `Date_modified`) 
    VALUES 
    (:PostId, :UserId, :Author, :Title, :Description, :Image, :Date, :Time, :Venue, :Status, :Date_added, :Date_modified);";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Events Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateEvents($formDetails, $filesData){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $time = strtotime($formDetails['TimeWebinar']);
    $data = [
        'IdEvents' => $_GET['events_id'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Date' => $formDetails['DateWebinar'],
        'Time' => date("h.i A", $time),
        'Venue' => $formDetails['VenueWebinar'],
        'Status' => $formDetails['Status'],
        'Date_modified' => $date_added,
    ];

    $sql = "UPDATE `news_events` SET
    `Title` = :Title, 
    `Description` = :Description, ";

    if($filesData['Image']['name'] != ""){
       
        $logoImage = imageUpload($directoryPath,$filesData['Image']);
        $data['Image'] = $logoImage;

        $sql .= "`Image` = :Image, ";

    }
   
    $sql .="
    `Date` = :Date, 
    `Time` = :Time, 
    `Venue` = :Venue, 
    `Status` = :Status, 
    `Date_modified` = :Date_modified WHERE IdEvents = :IdEvents";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Events Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function deleteWebinar($IdWebinar){
    
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM news_webinar Where IdWebinar  = :id");
    $query->execute(['id' => $IdWebinar]);
    $data = $query->fetch();

    $imageFile = $data['Image'];
    unlink("../../".$imageFile);


    $count=$pdo->prepare("DELETE FROM `news_webinar` WHERE `news_webinar`.`IdWebinar` = :webinar_id");
    $count->bindParam(":webinar_id",$IdWebinar,PDO::PARAM_INT);
    if($count->execute()){
    
        $_SESSION['success_message'] = "Webinar Successfully Deleted!";
    }else{
        $_SESSION['error_message'] = "Error occured!";
    }

}

function getSingleEvents($events_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_events WHERE IdEvents = '$events_id'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getAllEvents(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_events")->fetchAll();

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