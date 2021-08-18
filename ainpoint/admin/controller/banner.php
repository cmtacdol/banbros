<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

require_once("controller/dynamic_function.php");

function saveBanner($formDetails, $fileDetails){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 
        
    $imageuploadedpath = "";
    if(isset($fileDetails['images'])){
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++)
        {
         
        $title = $formDetails['title'][$a];
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
                'NavId' => $_GET['IdMenu'],
                'imageuploadedpath' => $imageuploadedpath,
                'Title' => $title,
                'Link' => $link,
            ];

            $sql = "INSERT INTO `banner` (`NavId`, `Image`, `Title`, `Link`, `SortOrder`) VALUES (:NavId, :imageuploadedpath, :Title, :Link, '0');";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute($data)){

                $_SESSION['success_message'] = "Banner Successfully Save!";
        
            }else{
                $_SESSION['error_message'] = "Error occured!";
        
            }
          }
        }
    }

}
function savePostBanner($formDetails, $fileDetails){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 
        
    $imageuploadedpath = "";
    if(isset($fileDetails['images'])){
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++)
        {
         
        $title = $formDetails['title'][$a];
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
                'PostId' => $_GET['IdPost'],
                'imageuploadedpath' => $imageuploadedpath,
                'Title' => $title,
                'Link' => $link,
            ];

            $sql = "INSERT INTO `banner` (`PostId`, `Image`, `Title`, `Link`, `SortOrder`) VALUES (:PostId, :imageuploadedpath, :Title, :Link, '0');";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute($data)){

                $_SESSION['success_message'] = "Banner Successfully Save!";
        
            }else{
                $_SESSION['error_message'] = "Error occured!";
        
            }
          }
        }
    }

}

function deleteBanner($bannerId){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `banner` Where IdBanner = :id");
    $query->execute(['id' => $bannerId]);
    $data = $query->fetch();

    @unlink("../".$data['Image']);

    $count=$pdo->prepare("DELETE FROM `banner` WHERE `banner`.`IdBanner` = :id");
    $count->bindParam(":id",$bannerId, PDO::PARAM_INT);
    if($count->execute()){

        $_SESSION['success_message'] = "Banner Successfully Deleted!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getMenu(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM nav_menu WHERE NavStatus != 1")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}


function getBannerByMenu($idMenu){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `banner` Where NavId = :id");
    $query->execute(['id' => $idMenu]);
    $data = $query->fetchAll();

    return $data; 
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



?>