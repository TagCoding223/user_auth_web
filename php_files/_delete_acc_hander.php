<?php
    require '_db_connection.php';
    require '_sanitization.php';
    session_start();
    if (!(isset($_SESSION['username'])) || $_SESSION['loggedin']!=true) {
        header("location: ./_login_page.html");
    }else{
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username=$_SESSION['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $username=sanitization($username);
            $email=sanitization($email);
            $password=sanitization($password);

            // for debugging
            // echo $username."<br>";
            // echo $email."<br>";
            // echo $password."<br>";

            // $sql="SELECT `password` FROM `image_picker_login` WHERE `username`='$username' and `email`='$email';";
            // $sql="SELECT `password` FROM `image_picker_login` WHERE `username`='Kumkum&commat;123' and `email`='Kumkum&commat;gmail&sdot;com';";
            // $sql="SELECT * FROM `image_picker_login` WHERE `username`='Kumkum&commat;123' and `email`='Kumkum&commat;gmail&sdot;com';";
            $sql="SELECT * FROM `image_picker_login` WHERE `username`='$username' and `email`='$email';";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);
            // $row=mysqli_fetch_array($result);
            $num=mysqli_num_rows($result);

            // for debuging
            // echo var_dump($num)."<br>";
            // echo var_dump($row)."<br>";
            // echo var_dump($row['password'])."<br>";
            // echo var_dump(password_verify($password,$row['password']))."<br>";

            if($num>0){
                if(password_verify($password,$row['password'])){
                    $sql="DELETE FROM `image_picker_login` where `username`='$username' and `email`='$email';";
                    $result=mysqli_query($con,$sql);
                    // $num=mysqli_num_rows($result);
                    if($result){
                        // Account Deleted
                        session_unset();
                        session_destroy();
                        header("Location: ../_login_page.html?message=delS");
                    }else{
                        // Something Wrong
                        header("Location: ../_logout.php?message=LsW");
                    }
                }else{
                    // Password not match
                    header("Location: ../_logout.php?message=LpnM");
                }
            }else{
                // Detials are wrong
                header("Location: ../_logout.php?message=WUD");
            }
        }
    }
?>