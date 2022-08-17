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
    <title>Category Add</title>

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
            <h1>Add Category</h1>
            <br><br>

            <?php

                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            ?>

            <br><br>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tr>
                        <td>Title: </td>
                        <td>
                            <input type="text" name="title" placeholder="Enter Title">
                        </td>
                    </tr>

                    <tr>
                        <td>Select Image: </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Featured: </td>
                        <td>
                            <input type="radio" name="featured" placeholder="Yes"> Yes
                            <input type="radio" name="featured" placeholder="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Active: </td>
                        <td>
                            <input type="radio" name="active" placeholder="Yes"> Yes
                            <input type="radio" name="active" placeholder="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>

            <?php

                if(isset($_POST['submit']))
                {
                    $title = $_POST['title'];

                    if(isset($_POST['featured']))
                    {
                        $featured = $_POST['featured'];
                    }

                    else
                    {
                        $featured = "No";
                    }

                    if(isset($_POST['active']))
                    {
                        $active = $_POST['active'];
                    }

                    else
                    {
                        $active = "No";
                    }

                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];

                        $ext = end(explode('.', $image_name));

                        $image_name = "Battleship_Category_".rand(000,999).'.'.$ext;

                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../images/category/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload == FALSE)
                        {
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image</div>";
                            header("location:".SITEURL.'admin/add-category.php');

                            die();
                        }
                    }

                    else
                    {
                        $image_name = "";
                    }

                    $sql = "INSERT INTO tbl_category SET
                        title='$title',
                        image_name='$image_name',
                        featured='$featured',
                        active='$active' 
                    ";

                    $res = mysqli_query($conn, $sql);

                    if($res == TRUE)
                    {
                        $_SESSION['add'] = "<div class='success'>Category Added Successfully</div>";
                        header("location:".SITEURL.'admin/manage-category.php');
                    }

                    else
                    {
                        $_SESSION['add'] = "<div class='error'>Failed to Add Category</div>";
                        header("location:".SITEURL.'admin/add-category.php');
                    }
                }
            ?>
        </div>
    </div>

    <div class="footer">
        <div class="wrapper">
            <p class="text-center">All rights reserved. Developed by <a href="#">Md. Musfiqur Rahman</a></p>
        </div>
    </div>
</body>
</html>