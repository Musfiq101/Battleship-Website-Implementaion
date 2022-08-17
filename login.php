<?php
    include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <p class="log-in">
        <div class="form">
            <p>Login</p>
            <br>
            <?php

                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }

            ?>
            <br>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="submit" value="login" class="button">

                <p class="message">Not registered?<a href="signup.php"> Create an account</a></p><br>
                <p class="message"><a href="admin/login.php">Admin Login</a></p>
            </form>
        </div>
    </p>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successfull</div>";
            $_SESSION['user'] = $username;

            header('location:'.SITEURL.'index.php');
        }

        else
        {
            $_SESSION['login'] = "<div class='error'>Username or Password Did not Match, Try Again</div>";
            header('location:'.SITEURL.'login.php');
        }
    }
?>