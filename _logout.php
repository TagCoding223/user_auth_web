<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
</head>

<body>
    <?php
        session_start();
        if (!(isset($_SESSION['username'])) || $_SESSION['loggedin']!=true) {
            header("location: ./_login_page.html");
        }
    ?>
    <!-- <form action="./php_files/_logout_hander.php" method="post">
        <button type="submit">Logout</button>
    </form> -->

    <a href="./php_files/_logout_hander.php"><button type="submit">Logout</button></a>

    <!-- <form action="./_delete_acc_hander.php" method="post">
        <button type="submit">Delete My Account</button>
    </form> -->

    <a href="./_delete_acc.php"><button type="submit">Delete My Account</button></a>
    <a href="./_set_password.php"><button type="submit">Change Password</button></a>
    <script src="js_files/_message_heander.js"></script>
</body>

</html>