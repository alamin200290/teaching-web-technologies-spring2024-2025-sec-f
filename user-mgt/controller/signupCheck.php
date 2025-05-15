<?php
    error_reporting(E_ALL);
    session_start();
    
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);

        if($username == "" || $password == "" || $email == ""){
            echo "Null username/password/email!";
        }else{
            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
            $sql = "insert into users values(null, '{$username}', '{$password}','{$email}')";
            if(mysqli_query($con, $sql)){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }

        }
    }else{
         header('location: ../view/login.html');
    }

?>