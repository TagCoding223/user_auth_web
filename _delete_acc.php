<?php
    session_start();
    // if ((isset($_SESSION['username']))){
    if ((isset($_SESSION['username'])) || $_SESSION['loggedin']==true) {
        
    }else{
        echo 'helllo2';
        header("Location: ./_login_page.html");
    } 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account | Image Picker</title>
    <link rel="stylesheet" href="..\User_WebProject\php_code_t\web_addons\fontawesome\css\all.css">
    <link rel="stylesheet" href="css_files/_signup_css.css">
</head>

<body>
    <div class="container">
        <div class="icon">
            <i class="user-icon fa fa-user"></i>
        </div>
        <h3>Verify Yourself!</h3>
        <form class="form_con" action="./php_files/_delete_acc_hander.php" method="post">
            <div class="inform_container forget_reset">
                <label for="email">Email : </label>
                <input type="email" name="email" required style="width: 40%; text-transform: none;" maxlength="20"
                    minlength="8">

            </div>

            <div class="inform_container forget_reset">
                <label for="password">Password : </label>
                <input type="password" name="password" required style="width: 34%;text-transform: none;" maxlength="20"
                    minlength="8">
                <span id="password_message">Show Password</span>
                <span id="password_eye"
                    style="position: relative;width: 6%;background: transparent;height: 0%;top: 5px;border-bottom: 2px solid;">
                    <i class="fas fa-eye-slash" style="cursor: pointer; background: white;color: black;"></i></span>
            </div>

            <button type="submit">Delete My Account</button>
        </form>
    </div>

    <script src="..\User_WebProject\php_code_t\web_addons\fontawesome\js\all.js"></script>
    <script src="js_files/_password_hide_unhide.js"></script>
    <script src="js_files/_message_heander.js"></script>
</body>

</html>