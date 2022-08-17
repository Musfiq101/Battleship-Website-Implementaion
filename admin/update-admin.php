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
    <title>Admin Update</title>

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
            <h1>Update Admin</h1>

            <br><br>

            <?php

                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_admin WHERE id=$id";

                $res = mysqli_query($conn, $sql);

                if($res == true)
                {
                    $count = mysqli_num_rows($res);

                    if($count == 1)
                    {
                        $row = mysqli_fetch_assoc($res);

                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $username = $row['username'];
                    }

                    else
                    {
                        header('location'.SITEURL.'admin/manage-admin.php');
                    }
                }
            ?>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="first_name" value="<?php echo $first_name; ?>"></td>
                    </tr>

                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
                    </tr>

                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
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
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];

            $sql = "UPDATE tbl_admin SET
            first_name = '$first_name',
            last_name = '$last_name',
            username = '$username' 
            WHERE id = '$id'
            ";

            $res = mysqli_query($conn, $sql);

            if($res == TRUE)
            {
                $_SESSION['update'] = "<div class='success'>Admin Updated Successfully</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
            }

            else
            {
                $_SESSION['update'] = "<div class='success'>Failed to Update Admin</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
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