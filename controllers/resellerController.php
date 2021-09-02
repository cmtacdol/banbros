<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getReseller($nav_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE NavId = '$nav_id' AND Status != '1'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


function getResellerImages($content_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM reseller WHERE ContentId = '$content_id'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

?>