<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php"; 
}

function getBanner($navId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM banner WHERE NavId = '$navId'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}



function sendToEmail($formDetails){

        $template_file = "controllers/utilities/inquire.php";
        $email_to = "banbros.mktg@gmail.com";
        $email_subject = "New Inquiry";
        $email_header = "MIME-Version: 1.0\r\n";
        $email_header .= "Content-type: text/html; charset=ISO-8859-1; \r\n";
        $email_header .= "From: No Reply <noreply@banbros.ph>";

        $swap_var = array(
            "{NAME}" => "" . strtoupper($formDetails['FirstName']) . ", " . strtoupper($formDetails['LastName']) . "",
            "{EMAIL}" => $formDetails['Email'],
            "{PURPOSE}" => $formDetails['Purpose'],
            "{MESSAGE}" => $formDetails['message'],
        );
        
        if (file_exists($template_file)) {
            $email_message = file_get_contents($template_file);
        }

        foreach (array_keys($swap_var) as $key) {
            if (strlen($key) > 2 && trim($key) != "") {
                $email_message = str_replace($key, $swap_var[$key], $email_message);
            }

        }


        if(mail($email_to, $email_subject, $email_message, $email_header)){

            $_SESSION['success_message'] = "Inquiry Successfully Send!";
        }else{
            $_SESSION['error_message'] = "Error occured!";
        }



}


?>