<?php
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveUsers($formDetails, $filesData)
{
    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath);

    // $datenow = date("Ymd");
    
    $date_added = date("Y-m-d H:i:s");

    $logoImage = "";

    if ($filesData['fileImage']['name'] != "") {
        $logoImage = imageUpload($directoryPath, $filesData['fileImage']);

        if ($logoImage == "Error the file exists already!") {
            $_SESSION['error_message'] = $logoImage;
        }
    } else {
        $logoImage = "";
    }

    $data = [
        'PermissionId' => $formDetails['RolePermission'],
        'Image' => $logoImage,
        'Name' => $formDetails['Name'],
        'Username' => $formDetails['Username'],
        'Email' => $formDetails['Email'],
        'Password' => md5($formDetails['Password']),
        'Date_added' => $date_added,
        'UserStatus' => $formDetails['Status']
    ];

    $sql = "INSERT INTO `users` 
    (`PermissionId`, `Image`, `Name`, `Username`, `Email`, `Password`, `Date_added`, `UserStatus`) 
    VALUES 
    (:PermissionId, :Image, :Name, :Username, :Email, :Password, :Date_added, :UserStatus);";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "User Successfully Added!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function updateUsers($formDetails, $filesData)
{
    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath);

    // $datenow = date("Ymd");
    
    $data = [
        'IdUsers' => $_GET['id_user'],
        'PermissionId' => $formDetails['RolePermission'],
        'Name' => $formDetails['Name'],
        'Username' => $formDetails['Username'],
        'Email' => $formDetails['Email'],
        'UserStatus' => $formDetails['Status']
    ];

    $sql = "UPDATE `users` SET `PermissionId` = :PermissionId, ";

    if ($filesData['fileImage']['name'] != "") {
        @$tobeRemoved = getSingleUsers($_GET['id_user']);
        @unlink('../../'.$tobeRemoved['Image']);
       
        $logoImage = imageUpload($directoryPath, $filesData['fileImage']);
        $data['Image'] = $logoImage;

        $sql .= "`Image` = :Image, ";
    }

    $sql .= "`Name` = :Name, `Username` = :Username, `Email` = :Email, ";

    if ($formDetails['Password'] != "") {
        $data['Password'] = md5($formDetails['Password']);
        $sql .= "`Password` = :Password, ";
    }

    $sql .= "`UserStatus` = :UserStatus WHERE IdUsers = :IdUsers";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "User Successfully Updated!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getAllUsers()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `users`")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getSingleUsers($id_user)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `users` WHERE IdUsers = '$id_user'")->fetch();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getIdRoles($id_permission)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `users_permission` WHERE IdPermission = '$id_permission'")->fetch();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getRolePermission()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `users_permission`")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

if (isset($_POST['usage']) && $_POST['usage'] == "login") {
    memberLogin($_POST['username'], $_POST['password']);
}

function memberLogin($username, $password)
{

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = md5(filter_var($password, FILTER_SANITIZE_STRING));
   
    if (is_null($username) || is_null($password) || $password == "" || $username == "") {
        echo "3";
        return;
    }

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users Where Username = :username AND Password = :pass");
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->bindValue(':pass', $password, PDO::PARAM_STR);
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if(count($rows) != 0){
        session_start();
        $_SESSION["admin_id"] = $rows[0]['IdUsers'];
        $_SESSION["admin_details"] = $rows[0];
        echo "Success";
        return;
    }
    else{
        echo "2";
        return;
    }

   
}

function imageUpload($directory, $file)
{
    $structure = '../../uploads/user_profile/'.$directory.'/';
    $databasepath = 'uploads/user_profile'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png') {
        if (!file_exists($structure)) {
            if (!mkdir($structure, 0777, true)) {
            } else {
                move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
                return $databasepath.$file["name"];
            }
        } else {
            move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
            return $databasepath.$file["name"];
        }
    } else {
        echo 'The source file type ' . $mimetype . ' is not supported';
        die();
    }
}



