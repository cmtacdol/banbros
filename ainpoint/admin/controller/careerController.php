<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}


function saveCareer($formDetails){

    global $pdo;

    $data = [
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
    ];

    $sql = "INSERT INTO `career` (`Title`, `Description`) VALUES (:Title, :Description);";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Career Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateCareer($formDetails){

    global $pdo;

    $data = [
        'Id' => $formDetails['id_career'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
    ];

    $sql = "UPDATE `career` SET 
    `Title` = :Title, 
    `Description` = :Description WHERE IdCareer = :Id";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Career Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getCareer(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career")->fetchAll();

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