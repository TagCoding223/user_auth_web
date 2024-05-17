<?php
// vishal note for you : your logic always right but you can't belive your self that wise your test goen on wrong direction(logic jo tu phli baar me lik deta he wo hamesa sahi hota he to logic test karne ke tarike ko sahi kar)
    require './_db_connection.php';
    require './_sanitization.php';
    session_start();
    if ((isset($_SESSION['username'])) || $_SESSION['loggedin']==true) {
        $username=$_SESSION['username'];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            if($password==$cpassword){
                $password=sanitization($password);
                $username=sanitization($username);
                $hash_password=password_hash($password,PASSWORD_DEFAULT);
                $query="UPDATE `image_picker_login` SET `password`='$hash_password' WHERE `username`='$username';";
                $result=mysqli_query($con,$query);
                if($result) {
                    session_unset();
                    session_destroy();
                    header("Location: ../_login_page.html?message=chS");
                }else{
                    session_unset();
                    session_destroy();
                    header("Location: ../password_reset.php?message=sometW");
                }
            }else{
                header("Location: ../_set_password.php?message=passNM");
            }
        }
    }else{
        session_unset();
        session_destroy();
        header("Location: ../_login_page.html");
    }
?>