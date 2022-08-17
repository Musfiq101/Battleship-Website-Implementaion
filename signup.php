<?php
    include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <p class="log-in">
        <div class="form">
            <p>Sign Up</p>
            <br>
            <?php

                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>
            <br>
            <form action="" method="POST">
                <input type="text" name="first_name" placeholder="Enter first name">
                <input type="text" name="last_name" placeholder="Enter last name">
                <input type="text" name="username" placeholder="Enter username">
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Signup" class="button">
            </form>
        </div>
    </p>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO tbl_user SET
            first_name='$first_name',
            last_name='$last_name',
            username='$username',
            password='$password'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res == TRUE)
        {
            $_SESSION['add'] = "User Added Successfully";
            header("location:".SITEURL.'index.php');
        }
        else
        {
            $_SESSION['add'] = "Failed to Add User";
            header("location:".SITEURL.'signup.php');
        }
    }

?>