<?php 
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getPost($parentId){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_post WHERE NavId = '$parentId' AND PostStatus != 1")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getBlog($parentId, $paginationStart, $limit){

    global $pdo;

    // $query = $pdo->query("SELECT * FROM news_blog WHERE PostId = '$parentId' AND Status != 1")->fetchAll();
    $query = $pdo->query("SELECT * FROM news_blog WHERE PostId = '$parentId' AND Status != 1 LIMIT $paginationStart, $limit")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}


function getBlogRelated(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_blog WHERE Status != 1")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getSingleBlog($idBlog){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_blog WHERE IdBlog = '$idBlog'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

// Webinar
function getWebinar($parentId, $paginationStart, $limit){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_webinar WHERE PostId = '$parentId' LIMIT $paginationStart, $limit")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getSingleWebinar($idWebinar){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_webinar WHERE IdWebinar = '$idWebinar'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getWebinarRelated(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_webinar")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

?>