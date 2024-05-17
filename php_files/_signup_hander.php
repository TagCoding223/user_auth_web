<?php
    require '_db_connection.php';
    require '_sanitization.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $date_of_birth=$_POST['date_of_birth'];
        $dob=date("Y-m-d",strtotime($date_of_birth));
        $username=$_POST['username'];
        $email=$_POST['email'];
        $tel_code=$_POST['tel_code'];
        $mobile_no=$_POST['mobile_no'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        // sanitization 
        $fname=sanitization($fname);
        $lname=sanitization($lname);
        // $date_of_birth=sanitization($date_of_birth);
        $username=sanitization($username);
        $email=sanitization($email);
        $tel_code=sanitization($tel_code);
        // $mobile_no=sanitization($mobile_no); // never take phone no as an int in db because int(10) , not means allow ten integer (they denote it -> Please enter a value less than or equal to 2147483647 ) that's why use char(10)
        $password=sanitization($password);
        $cpassword=sanitization($cpassword);
        
        // echo $date_of_birth;
        // echo gettype($dob);
        
        if($cpassword==$password){
            $query="SELECT * FROM `image_picker_login` WHERE `username`='$username' OR `email`='$email' OR `mobile_no`='$mobile_no';";
            $result=mysqli_query($con,$query);
            $aff_row=mysqli_num_rows($result);
            if($aff_row>0){
                // sleep(5);
                    // <!-- <body><script>alert("Given username, email or moblie number already exist.\nTry with another username,email or password.")</script></body> -->
                    // header('Location: ../_signup_page.html');
                    header('Location: ../_signup_page.html?message=existD');
                
            }else{
                $password_hash=password_hash($password,PASSWORD_DEFAULT);
                $query="INSERT INTO `image_picker_login` (`fname`,`lname`,`date_of_birth`,`username`,`email`,`tel_code`,`mobile_no`,`password`) values ('$fname','$lname','$dob','$username','$email','$tel_code','$mobile_no','$password_hash');";
                $result=mysqli_query($con,$query);
                // $aff_row=mysqli_num_rows($result);
                if ($result) {
                    // echo '<script>alert("Account Created Successfully")</script>';
                    header('Location: ../_login_page.html?message=accS');
                }else{
                    // echo '<script>alert("Something is wrong , Please try again.")</script>';
                    header('Location: ../_signup_page.html?message=sometW');
                }
            }
        }else{
            // echo '<script>alert("Password Not Match.")</script>';
            header('Location: ../_signup_page.html?message=passNM');
        }
    }


    // increase size of username email and password because it use special symbol that's why after sanitization its size automatically increase username email and password size is 50
?>
