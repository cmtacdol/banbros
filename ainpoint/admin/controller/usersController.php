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

function updateProfile($formDetails, $filesData)
{
    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath);

    // $datenow = date("Ymd");
    
    $data = [
        'IdUsers' => $_SESSION['admin_id'],
        'Name' => $formDetails['Name'],
        'Username' => $formDetails['Username'],
        'Email' => $formDetails['Email'],
    ];

    $sql = "UPDATE `users` SET ";

    if ($filesData['fileImage']['name'] != "") {
        @$tobeRemoved = getSingleUsers($_SESSION['admin_id']);
        @unlink('../../'.$tobeRemoved['Image']);
       
        $logoImage = imageUpload($directoryPath, $filesData['fileImage']);
        $data['Image'] = $logoImage;

        $sql .= "`Image` = :Image, ";
    }

    $sql .= "`Name` = :Name, `Username` = :Username, `Email` = :Email ";

    if ($formDetails['Password'] != "") {

        if($formDetails['Password'] == $formDetails['cPassword']){

            $data['Password'] = md5($formDetails['Password']);
            $sql .= ", `Password` = :Password ";
        }
        else{
            $_SESSION['error_message'] = "Password and Confirm Password does not match";
            return;
        }

    }

    $sql .= "WHERE IdUsers = :IdUsers";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "Profile Successfully Updated!";
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


if(isset($_POST['usage']) && $_POST['usage'] == 'checkEmail'){
    
    emailCheck($_POST['emailAccount']);

}

function emailCheck($email){

    global $db_conn;

    $result = mysqli_query($db_conn,"SELECT * FROM `users` WHERE Email = '$email' AND UserStatus != 1");
    $result_log = mysqli_fetch_array($result);
    $result_num = mysqli_num_rows($result);
    
    if($result_num != 0){
        echo "Success";
        return;
    }
    else{
        echo "2";
        return;
    }

}

function saveEmailForgotPass($formDetails){

    global $pdo;    

    $created = date("Y-m-d H:i:s");
    $temp_key = md5(time()+123456789% rand(4000, 55000000));
    $email = $formDetails['emailAccount'];

    $data = [
        'Email' => $email,
        'Temp_key' => $temp_key,
        'Created' => $created,
    ];

    $sql = "INSERT INTO `users_forgot_password` 
    (`Email`, `Temp_key`, `Created`) 
    VALUES 
    (:Email, :Temp_key, :Created);";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {

        $email_to = "$email";
        $email_subject = "Password Reset Request – Banbros Commercial Incorporated";
        $email_header = "MIME-Version: 1.0\r\n";
        $email_header .= "Content-type: text/html; charset=ISO-8859-1; \r\n";
        $email_header .= "From: Banbros Commercial Incorporated - <noreply@banbros.ph>";
        
        $email_message = "Hi ".$email.",
        We recently received a request to reset your password for your Banbros Commercial Incorporated account.
        To reset your password, please click the link below <br/><br/>
        
        https://ainpex.com/banbros/ainpoint/emailchangepass.php?key=".$temp_key."&email=".$email." <br/><br/>
        
        if you did not make this request, please disregard this email. <br/><br/>

        Thank you, <br/><br/>

        Copyright 2020 Banbros Commercial Incorporated
        ";

        mail($email_to,$email_subject,$email_message,$email_header);
        
        $_SESSION['success_message'] = "Please check your email inbox or spam folder and follow the steps!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
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



