<?php

    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Please Log in to Access Admin Panel</div>";
        header('location:'.SITEURL.'admin/login.php');
    }

?>