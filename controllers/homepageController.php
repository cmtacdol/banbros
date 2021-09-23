<?php
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getBanner($navId)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM banner WHERE NavId = '$navId'")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getLogoSlider()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM client_image")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getContents($title)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `content` WHERE Title LIKE '%$title%'")->fetch();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getAdsSlider()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM ads_banner")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function featuredProducts()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM featured_products")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function featuredProductsContent($featured_id)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `featured_products_images` fpi INNER JOIN product p ON fpi.ProductId = p.IdProduct WHERE fpi.FeaturedId = '$featured_id'")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getExecutives()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM content_executives WHERE Status != 1")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getPressRelease(){

    global $pdo;

    $query = $pdo->query("SELECT * FROM `press_release` pr INNER JOIN news_blog nb ON pr.BlogId = nb.IdBlog")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

?>