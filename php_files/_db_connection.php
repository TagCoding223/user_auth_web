<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='user_login_system';
    $con=mysqli_connect($server,$username,$password,$database);
    if (!$con) {
        die("Sever is under maintenance");
    }
    // echo 'Connection done';
?>