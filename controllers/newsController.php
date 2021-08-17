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


?>