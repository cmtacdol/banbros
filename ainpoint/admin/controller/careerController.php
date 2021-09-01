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


function saveIcons($formDetails, $fileDetails){

    global $pdo;
    
    $dateDirectory = date("YmdHis"); 
        
    $imageuploadedpath = "";
    if(isset($fileDetails['images'])){
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++)
        {
            
        $title = $formDetails['title'][$a];
        $description = $formDetails['description'][$a];
        
        $image = Array(
        "name" => $fileDetails["images"]["name"][$a],
        "type" => $fileDetails["images"]["type"][$a],
        "tmp_name" => $fileDetails["images"]["tmp_name"][$a],
        "error" => $fileDetails["images"]["error"][$a],
        "size" => $fileDetails["images"]["size"][$a],
        );
            
        $imageuploadedpath = ImageUpload($dateDirectory,$image);

        if($fileDetails['images']){
            
            $data = [
                'CareerId' => $_GET['id_career'],
                'Path' => $imageuploadedpath,
                'Title' => $title,
                'Description' => $description,
            ];

            $sql = "INSERT INTO `career_images` (`CareerId`, `Path`, `Title`, `Description`) VALUES (:CareerId, :Path, :Title, :Description);";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute($data)){

                $_SESSION['success_message'] = "Icons Successfully Save!";
        
            }else{
                $_SESSION['error_message'] = "Error occured!";
        
            }
            }
        }
    }
    
}

function deleteIcons($careerImageId){

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `career_images` Where IdCareerImages = :id");
    $query->execute(['id' => $careerImageId]);
    $data = $query->fetch();

    @unlink("../../".$data['Path']);

    $count=$pdo->prepare("DELETE FROM `career_images` WHERE `career_images`.`IdCareerImages` = :id");
    $count->bindParam(":id",$careerImageId, PDO::PARAM_INT);
    if($count->execute()){

        $_SESSION['success_message'] = "Icon Successfully Deleted!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getAllIcons($id_career){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career_images WHERE CareerId = '$id_career'")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}



function saveJobDescription($formDetails){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $date_added = date("Y-m-d H:i:s"); 

    $data = [
        'CareerId' => $_GET['id_career'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Link' => $formDetails['ApplyNowLink'],
        'ShareLink1' => $formDetails['link1'],
        'ShareLink2' => $formDetails['link2'],
        'ShareLink3' => $formDetails['link3'],
        'Status' => $formDetails['Status'],
        'Date_added' => $date_added,
        'Date_modified' => $date_added,
    ];

    $sql = "INSERT INTO `career_section` (`CareerId`, `Title`, `Description`, `Link`, `ShareLink1`, `ShareLink2`, `ShareLink3`, `Status`, `Date_added`, `Date_modified`) 
    VALUES 
    (:CareerId, :Title, :Description, :Link, :ShareLink1, :ShareLink2, :ShareLink3, :Status, :Date_added, :Date_modified);";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Job Successfully Save!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function updateJobDescription($formDetails){

    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath); 

    // $datenow = date("Ymd"); 
    
    $dates = date("Y-m-d H:i:s"); 

    $data = [
        'IdCareerSection' => $_GET['careerSection_id'],
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Link' => $formDetails['ApplyNowLink'],
        'ShareLink1' => $formDetails['link1'],
        'ShareLink2' => $formDetails['link2'],
        'ShareLink3' => $formDetails['link3'],
        'Status' => $formDetails['Status'],
        'Date_modified' => $dates,
    ];

    $sql = "UPDATE `career_section` SET
    `Title` = :Title, 
    `Description` = :Description, 
    `Link` = :Link, 
    `ShareLink1` = :ShareLink1, 
    `ShareLink2` = :ShareLink2, 
    `ShareLink3` = :ShareLink3, 
    `Status` = :Status, 
    `Date_modified` = :Date_modified WHERE IdCareerSection = :IdCareerSection";

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){

        $_SESSION['success_message'] = "Job Successfully Updated!";

    }else{
        $_SESSION['error_message'] = "Error occured!";

    }

}

function getAllJobDescription($career_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career_section WHERE CareerId = '$career_id'")->fetchAll();

    if(empty($query ) || count($query) == 0){

        return [];

    }else{

        return  $query;
 
    }

}

function getAllJobDescriptionById($career_section_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career_section WHERE IdCareerSection = '$career_section_id'")->fetch();
    return  $query;
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