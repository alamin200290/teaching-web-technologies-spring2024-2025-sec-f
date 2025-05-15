<?php
    //include('db.php');
    //include_once('db.php');
    //require('db.php');
    require_once('db.php');

function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }

}

function getUserById($id){

}

function getAllUser(){

}

function deleteUser($id){

}

function addUser($user){

}

?>