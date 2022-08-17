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
    <title>Admin Manage</title>

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
            <h1>Manage Admin</h1>

            <br><br>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }

                if(isset($_SESSION['user_not_found']))
                {
                    echo $_SESSION['user_not_found'];
                    unset($_SESSION['user_not_found']);
                }

                if(isset($_SESSION['pwd_not_match']))
                {
                    echo $_SESSION['pwd_not_match'];
                    unset($_SESSION['pwd_not_match']);
                }

                if(isset($_SESSION['change_pwd']))
                {
                    echo $_SESSION['change_pwd'];
                    unset($_SESSION['change_pwd']);
                }
            ?>

            <br><br><br>
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br><br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM tbl_admin";

                    $res = mysqli_query($conn, $sql);

                    if($res == TRUE)
                    {
                        $count = mysqli_num_rows($res);

                        $sn = 1;

                        if($count > 0)
                        {
                            while($rows = mysqli_fetch_assoc($res))
                            {
                                $id = $rows['id'];
                                $first_name = $rows['first_name'];
                                $last_name = $rows['last_name'];
                                $username = $rows['username'];

                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $first_name; ?></td>
                                    <td><?php echo $last_name; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {

                        }
                    }
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="wrapper">
            <p class="text-center">All rights reserved. Developed by <a href="#">Md. Musfiqur Rahman</a></p>
        </div>
    </div>
</body>
</html>