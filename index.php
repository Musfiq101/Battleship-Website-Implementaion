<?php
    include('config/constants.php');
    include('signin-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle Nerds</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Battleship Logo" class="img-responsive">
            </div>

            <?php

                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

            ?>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>

                    <li>
                        <a href="signout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="battleship-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for Battleships...">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <h2 class="text-center">Categories</h2>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/air-carrier.jpg" alt="aircraft-carriers" class="img-responsive img-curve">

                <h3 class="float-text1 text-white">Aircraft Carriers</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/cruiser.jpg" alt="cruiser" class="img-responsive img-curve">

                <h3 class="float-text2 text-white">Cruiser</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/corvette.jpg" alt="corvette" class="img-responsive img-curve">

                <h3 class="float-text2 text-white">Corvette</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/destroyer.jpg" alt="destroyer" class="img-responsive img-curve">

                <h3 class="float-text2 text-white">Destroyer</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/frigate.jpg" alt="frigate" class="img-responsive img-curve">

                <h3 class="float-text2 text-white">Frigate</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/submarine.jpg" alt="submarine" class="img-responsive img-curve">

                <h3 class="float-text2 text-white">Submarine</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/amphibious assault ship.jpg" alt="amphibious-assault-ship" class="img-responsive img-curve">

                <h3 class="float-text3 text-white">Amphibious Assault Ship</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-8 float-container">
                <img src="images/concept.jpg" alt="concept" class="img-responsive img-curve">

                <h3 class="float-text1 text-white">Concept Battleships</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>

    <section class="explore-menu">
        <div class="container">
            <h2 class="text-center">Explore Battleship Classes</h2>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/USS_Texas.jpg" alt="USS Texas" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>USS Texas</h4>
                    <p class="ship-info">Displacement: 6,682 tons</p>
                    <p class="ship-info">Speed: 18 knots</p>
                    <p class="ship-info">Ships in class: 1</p>
                    <br>
                    <a href="class-1.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/USS_Maine.jpg" alt="USS Marine" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>USS Maine</h4>
                    <p class="ship-info">Displacement: 6,682 tons</p>
                    <p class="ship-info">Speed: 17 knots</p>
                    <p class="ship-info">Ships in class: 1</p>
                    <br>
                    <a href="class-2.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/indiana-class.jpg" alt="Indiana class" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>Indiana class</h4>
                    <p class="ship-info">Displacement: 10,288 tons</p>
                    <p class="ship-info">Speed: 15 knots</p>
                    <p class="ship-info">Ships in class: 3</p>
                    <br>
                    <a href="class-3.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/USS_Iowa.jpg" alt="USS Iowa" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>USS Iowa</h4>
                    <p class="ship-info">Displacement: 11,346 tons</p>
                    <p class="ship-info">Speed: 17 knots</p>
                    <p class="ship-info">Ships in class: 1</p>
                    <br>
                    <a href="class-4.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/Uss_kentucky.jpg" alt="Kearsarge class" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>Kearsarge class</h4>
                    <p class="ship-info">Displacement: 11,540 tons</p>
                    <p class="ship-info">Speed: 15 knots</p>
                    <p class="ship-info">Ships in class: 2</p>
                    <br>
                    <a href="class-5.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/USS_Alabama.jpg" alt="Illinois class" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>Illinois class</h4>
                    <p class="ship-info">Displacement: 11,565 tons</p>
                    <p class="ship-info">Speed: 17 knots</p>
                    <p class="ship-info">Ships in class: 3</p>
                    <br>
                    <a href="class-6.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/Uss_new_jersey.jpg" alt="Virginia class" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>Virginia class</h4>
                    <p class="ship-info">Displacement: 15,000 tons</p>
                    <p class="ship-info">Speed: 19 knots</p>
                    <p class="ship-info">Ships in class: 5</p>
                    <br>
                    <a href="class-7.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="ship-menu-box">
                <div class="ship-menu-img">
                    <img src="images/USS_Mississippi.jpg" alt="Mississippi class" class="img-responsive img-curve">
                </div>

                <div class="ship-menu-desc">
                    <h4>Mississippi class</h4>
                    <p class="ship-info">Displacement: 13,000 tons</p>
                    <p class="ship-info">Speed: 17 knots</p>
                    <p class="ship-info">Ships in class: 2</p>
                    <br>
                    <a href="class-8.php" class="btn btn-primary">Read more</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <section class="social-media">
        <div id ="contact" class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png"/></a>
                </li>

                <li>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/instagram-new--v1.png"/></a>
                </li>

                <li>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Developed by <a href="#">Md. Musfiqur Rahman</a></p>
        </div>
    </section>
</body>
</html>