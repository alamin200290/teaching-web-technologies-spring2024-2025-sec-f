<?php
    //sleep(3);
    $data = $_POST['json'];
    $user = json_decode($data);
    echo $user->email;
    //$user = ['username'=>'alamin', 'password'=> '123', 'email'=>'alamin@aiub.edu'];
    //echo json_encode($user);
    //echo "Your username is: ".$username;

?>