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

function getTabTitle(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content_tab")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

function getContentByTab($navId, $tabId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE NavId = '$navId' AND ParentId = '$tabId'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}

?>