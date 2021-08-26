<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveImages($formDetails, $fileDetails){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 
        
    $imageuploadedpath = "";
    if(isset($fileDetails['images'])){
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++)
        {
         
        $link = $formDetails['links'][$a];
        
        $image = Array(
        "name" => $fileDetails["images"]["name"][$a],
        "type" => $fileDetails["images"]["type"][$a],
        "tmp_name" => $fileDetails["images"]["tmp_name"][$a],
        "error" => $fileDetails["images"]["error"][$a],
        "size" => $fileDetails["images"]["size"][$a],
        );
         
        $imageuploadedpath = ImageUpload($directoryPath,$image);

        if($fileDetails['images']){
            
            $data = [
                'Path' => $imageuploadedpath,
                'Link' => $link,
            ];

            $sql = "INSERT INTO `client_image` (`Path`, `Link`) VALUES (:Path, :Link);";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute($data)){

                $_SESSION['success_message'] = "Image Successfully Save!";
        
            }else{
                $_SESSION['error_message'] = "Error occured!";
        
            }
          }
        }
    }

}

function deleteImages($ImageId){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `client_image` Where IdClientImage = :id");
    $query->execute(['id' => $ImageId]);
    $data = $query->fetch();

    @unlink("../../".$data['Path']);

    $count=$pdo->prepare("DELETE FROM `client_image` WHERE `client_image`.`IdClientImage` = :id");
    $count->bindParam(":id",$ImageId, PDO::PARAM_INT);
    if($count->execute()){

        $_SESSION['success_message'] = "Image Successfully Deleted!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getAllImages(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM `client_image`")->fetchAll();

    return $query; 
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