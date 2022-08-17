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
    <title>Admin Add</title>

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
            <h1>Add Admin</h1>
            <br><br>

            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

            <br><br><br>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="first_name" placeholder="Enter your first name"></td>
                    </tr>

                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="last_name" placeholder="Enter your last name"></td>
                    </tr>

                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="username" placeholder="Enter your user name"></td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="Enter your password"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>            
        </div>
    </div>

    <div class="footer">
        <div class="wrapper">
            <p class="text-center">All rights reserved. Developed by <a href="#">Md. Musfiqur Rahman</a></p>
        </div>
    </div>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO tbl_admin SET
            first_name='$first_name',
            last_name='$last_name',
            username='$username',
            password='$password'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res == TRUE)
        {
            //echo "Data Inserted Successfully";
            $_SESSION['add'] = "Admin Added Successfully";
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //echo"Failed to Insert Data";
            $_SESSION['add'] = "Failed to Add Admin";
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }

?>