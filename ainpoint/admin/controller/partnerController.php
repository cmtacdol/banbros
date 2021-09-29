<?php
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function getPartners()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM business_partners")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function getSpecificPartners($businessPartnerId)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM business_partners WHERE IdBusinessPartner = '$businessPartnerId'")->fetch();

    return  $query;
}

function getPartnerExtension($businessPartnerId)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM business_partners_extension WHERE BusinessPartnerId = '$businessPartnerId'")->fetchAll();
    
    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}