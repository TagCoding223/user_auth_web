
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password | Image Picker</title>
    <link rel="stylesheet" href="..\User_WebProject\php_code_t\web_addons\fontawesome\css\all.css">
    <link rel="stylesheet" href="css_files/_signup_css.css">
</head>

<body>
    <?php
    // require './php_files/_db_connection.php';
    // require './php_files/_sanitization.php';

    session_start();
    if (!(isset($_SESSION['username'])) || $_SESSION['loggedin']!=true) {//|| $_SESSION['loggedin']==true   
        // echo "bye";
    }
    else{
        // session set
        header("Location: ./_logout.php");
        echo "hello";
    }
    ?>
    <div class="container">
        <div class="icon">
            <i class="user-icon fa fa-user"></i>
        </div>
        <h3>Verify Yourself!</h3>
        <form class="form_con" action="./php_files/_password_reset_hander.php" method="post">
            <div class="inform_container">
                <label for="username">Username : </label>
                <input type="text" name="username" required maxlength="10" minlength="6" style="text-transform: none;">
            </div>
            <div class="inform_container">
                <label for="email">Email : </label>
                <input type="email" name="email" required style="text-transform: none;" maxlength="50">
            </div>
            <div class="inform_container">
                <label for="dob">Date Of Birth : </label>
                <!-- <input type="text" name="date_of_birth"  placeholder="YYYY-MM-DD" required="" min="1920-01-01" max="2018-01-01" style="text-transform: uppercase;" pattern="\d{4}-\d{2}-\d{2}"> -->
                <input type="date" name="date_of_birth" required min="1920-01-01" max="2018-01-01"
                    style="text-transform: uppercase;">
            </div>
            <button type="submit" style="width: 20%;">Submit</button>
        </form>
    </div>

    <script src="..\User_WebProject\php_code_t\web_addons\fontawesome\js\all.js"></script>
    <script src="js_files/_message_heander.js"></script>
</body>

</html>