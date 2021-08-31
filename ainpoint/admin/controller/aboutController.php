<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveTab($formDetails){

    global $pdo;

    $data = [
        'TabTitle' => $formDetails['TabTitle'],
        'BodyHeader' => $formDetails['BodyHeader'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "INSERT INTO `content_tab` (`TabTitle`, `BodyHeader`, `Status`) VALUES (:TabTitle, :BodyHeader, :Status);";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Tab Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateTab($formDetails){

    global $pdo;

    $data = [
        'Id' => $formDetails['id_tab'],
        'TabTitle' => $formDetails['TabTitle'],
        'BodyHeader' => $formDetails['BodyHeader'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `content_tab` SET 
    `TabTitle` = :TabTitle, 
    `BodyHeader` = :BodyHeader, 
    `Status` = :Status WHERE IdContentTab = :Id";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Tab Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}


function getTabContent(){

    global $pdo;

    $sql = $pdo->query("SELECT * FROM `content_tab`")->fetchAll();

    if(empty($sql ) || count($sql) == 0){
        return [];
    }else{
        return  $sql;
    }
    
}


function saveContentAbout($formDetails){

    global $pdo;

    $data = [
        'NavId' => $formDetails['Parent'],
        'ParentId' => $formDetails['parentTabId'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "INSERT INTO `content` (`NavId`, `ParentId`, `Title`, `Description`, `Status`) VALUES (:NavId, :ParentId, :Title, :Description, :Status);";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Content Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateContentAbout($formDetails){

    global $pdo;

    $data = [
        'IdContent' => $formDetails['id_content'],
        'NavId' => $formDetails['Parent'],
        'ParentId' => $formDetails['parentTabId'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `content` SET 
    `NavId` = :NavId, 
    `ParentId` = :ParentId, 
    `Title` = :Title, 
    `Description` = :Description, 
    `Status` = :Status WHERE IdContent = :IdContent";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Content Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getContent($idNav, $tabId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE NavId = '$idNav' AND ParentId = '$tabId'")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}

function getSingleContent($idContent){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE IdContent = '$idContent'")->fetch();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}

function getMenu($idNav){

    global $pdo;

    $query = $pdo->query("SELECT * FROM nav_menu WHERE IdNavMenu = '$idNav' AND NavStatus != 1")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}

function imageUpload($directory,$file){

    $structure = '../../uploads/clientImage/'.$directory.'/';
    $databasepath = 'uploads/clientImage'.$directory.'/';
  
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