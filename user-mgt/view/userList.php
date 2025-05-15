<?php

    require_once('../model/userModel.php');

    if(!isset($_COOKIE['status'])){
        header('location: ../view/login.html');
    }

    $userList = getAllUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
    <a href="home.php"> Back  </a> |
    <a href="../controller/logout.php"> Logout  </a>

    <h1>List of Users </h1>
    <br>

    <table border=1> 
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>Password</td>
            <td>EMAIL</td>
        </tr>
        <?php
            for($i=0; $i < count($userList); $i++){
        ?>
        <tr>
            <td><?php echo $userList[$i]['id']; ?></td>
            <td><?=$userList[$i]['username']?></td>
            <td><?=$userList[$i]['password']?></td>
            <td><?=$userList[$i]['email']?></td>
        </tr>

        <?php  } ?>
    </table>
</body>
</html>