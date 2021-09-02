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

function getCareer(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


function getCareerImage($career_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career_images WHERE CareerId = '$career_id'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


function getCareerJobs($career_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM career_section WHERE CareerId = '$career_id'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
}


?>