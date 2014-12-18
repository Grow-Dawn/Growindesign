<?php

function connAdmin() {
    $username = 'futeigei';
    $password = 'Aurora69!!';
    try {
        $db = new PDO("mysql:host=localhost;dbname=futeigei_artwork", $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $db;
}

function connUser() {
    $username = ' ';
    $password = ' ';

    $db = new PDO("mysql:host=localhost;dbname=futeigei_artwork", $username, $password);
    return $db;
}
