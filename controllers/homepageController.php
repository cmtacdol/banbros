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


?>