<?php
    include('../config/constants.php');
    include('../config/login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-category.php">Category</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="main_content">
        <div class="wrapper">
            <h1>Change Password</h1>
            <br><br>

            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                }
            ?>

            <br><br><br>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Current Password: </td>
                        <td><input type="password" name="current_password" placeholder="Current Password"></td>
                    </tr>

                    <tr>
                        <td>New Password: </td>
                        <td><input type="password" name="new_password" placeholder="New Password"></td>
                    </tr>

                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirm_password" placeholder="Confirm password"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>            
        </div>
    </div>

    <?php

        if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password = md5($_POST['confirm_password']);

            $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

            $res = mysqli_query($conn, $sql);

            if($res == TRUE)
            {
                $count = mysqli_num_rows($res);

                if($count == 1)
                {
                    if($new_password == $confirm_password)
                    {
                        $sql2 = "UPDATE tbl_admin SET
                            password = '$new_password'
                            WHERE id = $id
                        ";

                        $res2 = mysqli_query($conn, $sql2);

                        if($res2 == TRUE)
                        {
                            $_SESSION['change_pwd'] = "<div class='success'>Password Changed Successfully</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }

                        else
                        {
                            $_SESSION['change_pwd'] = "<div class='success'>Failed to Change Password, Try Again Later!</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }

                    else
                    {
                        $_SESSION['pwd_not_match'] = "<div class='success'>Password Does Not Match. Try Again!</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }

                else
                {
                    $_SESSION['user_not_found'] = "<div class='success'>User Not Found</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        }

    ?>

    <div class="footer">
        <div class="wrapper">
            <p class="text-center">All rights reserved. Developed by <a href="#">Md. Musfiqur Rahman</a></p>
        </div>
    </div>
</body>
</html>