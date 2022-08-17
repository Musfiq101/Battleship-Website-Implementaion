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
    <title>Category Page</title>

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
            <h1>Manage Category</h1>

            <br><br><br>

            <?php

                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
            ?>
            <br><br>
            <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM tbl_category";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                    $sn = 1;

                    if($count > 0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $image_name = $row['image_name'];
                            $featured = $row['featured'];
                            $active = $row['active'];

                            ?>

                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $title; ?></td>

                                    <td>
                                        <?php
                                            if($image_name != "")
                                            {
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }

                                            else
                                            {
                                                echo "<div class='error'>Image Not Found</div>";
                                            }
                                        ?>
                                    </td>

                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete category</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }

                    else
                    {
                        ?>
                        <tr>
                            <td colspan="6"><div class="error">No Category Added</div></td>
                        </tr>
                        <?php
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