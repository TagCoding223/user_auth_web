<?php
    require './_db_connection.php';
    require './_sanitization.php';

    session_start();
    if ((isset($_SESSION['username']))){
    // if ((isset($_SESSION['username'])) || $_SESSION['loggedin']==true) {//|| $_SESSION['loggedin']==true
        // session set
        header("Location: ../_logout.php");
        echo "hello";
    }else{
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            $username=$_POST['username'];
            $email=$_POST['email'];
            // $dob=$_POST['date_of_birth'];
            // $dob=date("Y-m-d",strtotime($dob));
            $date_of_birth=$_POST['date_of_birth'];
            $dob=date("Y-m-d",strtotime($date_of_birth));

            $username=sanitization($username);
            $email=sanitization($email);

            $query="SELECT * FROM `image_picker_login` WHERE `username`='$username' and `email`='$email' and `date_of_birth`='$dob';";
            // $query="SELECT * FROM `image_picker_login` WHERE `username`='$username' and `email`='$email'"; // worked
            
            $result=mysqli_query($con,$query);
            // $row=mysqli_affected_rows($result);
            $num=mysqli_num_rows($result);
            if($num>0){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                header("Location: ../_set_password.php");
            }else{
                header("Location: ../_password_reset.php?message=userNE");
            }
        }
    }
    
?>