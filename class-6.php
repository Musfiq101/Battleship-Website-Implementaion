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
    <title>Battle Classes</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Battleship Logo" class="img-responsive">
            </div>

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

    <section class="slide-images">
        <h2 class="text-center">USS Illinois</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_Illinois1.jpg" class="slider-image img-curve">
                <img src="images/USS_Illinois2.jpg" class="slider-image img-curve">
                <img src="images/USS_Illinois3.jpg" class="slider-image img-curve">
                <img src="images/USS_Illinois4.jpg" class="slider-image img-curve">
            </div>
            <div class="button-container">
                <a href="#slider-image-1" class="slider-button"></a>
                <a href="#slider-image-2" class="slider-button"></a>
                <a href="#slider-image-3" class="slider-button"></a>
                <a href="#slider-image-4" class="slider-button"></a>
            </div>
        </div>
    </section>

    <section class="class-desc">
        <h1 class="text-center">Description</h1>
        <div id="wrapper">
            <div class="row">
                <div class="column">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3"><h3 class="text-center">Career(US)</h3></th>               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="data1"><b>Name:</b></td>
                                <td colspan="2" data-label="data2">Illinois</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">USS Illinois</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Operator:</b></td>
                                <td colspan="2" data-label="data2">United States</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Builder:</b></td>
                                <td colspan="2" data-label="data2">-</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Cost:</b></td>
                                <td colspan="2" data-label="data2"><b>-</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Predecessor:</b></td>
                                <td colspan="2" data-label="data2"><a href="class-5.php">USS Kearsarge</a>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Successor:</b></td>
                                <td colspan="2" data-label="data2"><a href="class-2.php">USS Maine</a>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Laid Down:</b></td>
                                <td colspan="2" data-label="data2">9 February 1897</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">26 November 1898</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">4 February 1901</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">15 May 1920</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Total Made:</b></td>
                                <td colspan="2" data-label="data2">3</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Fate:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>Decommissioned and sold for scrap <br><br> 26 January 1922</b></td>
                            </tr>

                        </tbody>    
                    </table>        
                </div>
                <div class="column">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3"><h3 class="text-center">General Info</h3></th>               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="data1"><b>Type:</b></td>
                                <td style="color:blue;" colspan="2" data-label="data2"><b>Battleship (Pre-dreadnought)</b></td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Displacement:</b></td>
                                <td colspan="2" data-label="data2">11,565 tons</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">368 ft (112 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">72 ft 3 in (22.02 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">23 ft 5 in (7.14 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Installed power:</b></td>
                                <td colspan="2" data-label="data2">5 x boilers<br><br>10,000 ihp (7,500 kW) (design)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Propulsion:</b></td>
                                <td colspan="2" data-label="data2">                                   	
                                    2 x VTE engines<br><br>
                                    2 x propeller shafts
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Speed:</b></td>
                                <td colspan="2" data-label="data2">17 kn (20 mph; 31 km/h)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">660 officers and men</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Armor:</b></td>
                                <td colspan="2" data-label="data2">                                   	
                                    Belt: 5.5–16.5 in (140–419 mm)<br><br>
                                    Barbettes: 10–15 in (254–381 mm)<br><br>
                                    Turret (Mains): 14 in (356 mm)<br><br>
                                    Turret (secondary): 5.5–6 in (140–152 mm)<br><br>
                                    Conning tower: 10 in (254 mm)
                                </td>
                            </tr>                       
                        </tbody>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </section>

    <section class="user-comm">
        <h1 class="text-center">Comment Section</h1>
        <div class="comment-box">
            <form action="#">
                <textarea name="comment" placeholder="Type your thoughts..."></textarea>
                <a href="#" class="btn2">Submit</a><br><br>
            </form>
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