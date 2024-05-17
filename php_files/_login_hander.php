<?php
    require '_db_connection.php';
    require '_sanitization.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $username=$_POST['username'];
        $password=$_POST['password'];
        // echo $username,$password;
        $username=sanitization($username);
        $password=sanitization($password);// we cannot need to sanitize it because browser automatically conveter tag name to right symbol (test inside inspect element)
        $query="SELECT * FROM `image_picker_login` WHERE `username`='$username';";
        $result=mysqli_query($con,$query);
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        if($num>0){
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                // echo "login success";
                header("Location: ../_logout.php");
            }else{
                // wrong password
                header("Location: ../_login_page.html?message=passW");
            }
        }else{
            // user not found
            header("Location: ../_signup_page.html?message=userNE");
        }
    }
?>