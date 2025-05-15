<?php
    error_reporting(E_ALL);
    session_start();
    require_once('../model/userModel.php');    
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        if($username == "" || $password == ""){
            echo "Null username/password!";
        }else{
            
            $user = ['username'=> $username, 'password'=>$password];
            $status = login($user);

            if($status){
                setcookie('status', 'true', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                header('location: ../view/login.html');
            }
         }
    }else{
        header('location: ../view/login.html');
    }

?>