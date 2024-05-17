<?php
    
    // echo 'hello';
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])==true) {
        session_unset();
        session_destroy();
        header("Location: ../_login_page.html");
    }
?>