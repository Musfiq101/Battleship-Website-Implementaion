<?php

    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Please Log in to Access This Website</div>";
        header('location:'.SITEURL.'login.php');
    }

?>