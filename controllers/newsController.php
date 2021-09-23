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

function getBannerByPost($post_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM banner WHERE PostId = '$post_id'")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }
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

function getPromos($parentId, $paginationStart, $limit){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_promos WHERE PostId = '$parentId' LIMIT $paginationStart, $limit")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getSinglePromos($idPromos){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_promos WHERE IdPromos = '$idPromos'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}


function getEvents($parentId, $paginationStart, $limit){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_events WHERE PostId = '$parentId' LIMIT $paginationStart, $limit")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

function getSingleEvents($event_id){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_events WHERE IdEvents = '$event_id'")->fetch();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}


function getEventsRelated(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM news_events")->fetchAll();

    if(empty($query ) || count($query) == 0){
        return [];
    }else{
        return  $query;
    }

}

?>