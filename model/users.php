<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/util/connection.php';

function getUsers(){
    $db = connAdmin();
    $sql = 'SELECT * FROM users';
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $users;
}
function getUser($id){
    $db = connAdmin();
    $sql = 'SELECT * FROM users WHERE userID = :id';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $user;
}
function getUserByEmail($email){
    $db = connAdmin();
    $sql = 'SELECT * FROM users WHERE email = :email';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $user;
}
function addUser($firstName, $lastName, $email, $password){
    $db = connAdmin();
    $sql = 'INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':firstName', $firstName);
        $stmt->bindValue(':lastName', $lastName);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $userID = $db->lastInsertId();
    } catch (PDOException $e){
        return FALSE;
    } 
    if ($userID){
    return $userID;
     } else {
         return FALSE;
     }
}
function updateUser($id, $firstName, $lastName, $email, $password, $access='user'){
    echo "$id, $firstName, $lastName, $email, $password, $access";
    $db = connAdmin();
    $sql = 'UPDATE users SET firstName=:firstName, lastName=:lastName, email=:email, password=:password, access=:access WHERE userID=:id';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':firstName', $firstName);
        $stmt->bindValue(':lastName', $lastName);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':access', $access);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $success = $stmt->rowCount();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $success;
}
function deleteUser($id){
    $db = connAdmin();
    $sql = 'DELETE FROM users WHERE userID = :id';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $success = $stmt->rowCount();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $success;
}
function checkLogin($email, $password){
    $db = connAdmin();
    $sql = 'SELECT firstName, userID, access FROM users WHERE email=:email AND password=:password';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch();
    } catch (PDOException $e){
        return FALSE;
    } 
    return $user;
}