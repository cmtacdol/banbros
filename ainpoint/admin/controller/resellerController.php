<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveImages($formDetails, $fileDetails){

    global $pdo;

    $datePath = date("YmdHis"); 
        
    $imageuploadedpath = "";
    if(isset($fileDetails['images']) && !empty($fileDetails['images'])){
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++)
        {
         
        $link = $formDetails['link'][$a];
        
        $image = Array(
        "name" => $fileDetails["images"]["name"][$a],
        "type" => $fileDetails["images"]["type"][$a],
        "tmp_name" => $fileDetails["images"]["tmp_name"][$a],
        "error" => $fileDetails["images"]["error"][$a],
        "size" => $fileDetails["images"]["size"][$a],
        );
         
        $imageuploadedpath = ImageUpload($datePath,$image);

        if($fileDetails['images']){
            
            $data = [
                'Id' => $_GET['id_content'],
                'Path' => $imageuploadedpath,
                'Link' => $link,
            ];

            $sql = "INSERT INTO `reseller` (`ContentId`, `Path`, `Link`) VALUES (:Id, :Path, :Link);";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
          }
        }
    }

}

function getImages($id_content){

    global $pdo;

    $query = $pdo->query("SELECT * FROM reseller WHERE ContentId = '$id_content'")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}

function saveContent($formDetails){

    global $pdo;

    $data = [
        'NavId' => $formDetails['Parent'],
        'ParentId' => '0',
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

function updateContent($formDetails){

    global $pdo;

    $data = [
        'Id' => $_GET['id_content'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `content` SET 
    `Title` = :Title, 
    `Description` = :Description, 
    `Status` = :Status WHERE IdContent = :Id";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Content Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getResellerContent($id_content){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE IdContent = '$id_content'")->fetch();

    return  $query;
 
}

function getReseller($idNav){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE NavId = '$idNav'")->fetchAll();

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

    $structure = '../../uploads/'.$directory.'/';
    $databasepath = 'uploads/'.$directory.'/';
  
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