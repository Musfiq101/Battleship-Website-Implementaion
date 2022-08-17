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
        <h2 class="text-center">USS Kearsarge</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_kearsarge.jpg" class="slider-image img-curve">
                <img src="images/Uss_kearsarge2.jpg" class="slider-image img-curve">
                <img src="images/USS_kearsarge3.jpg" class="slider-image img-curve">
                <img src="images/USS_kearsarge4.jpg" class="slider-image img-curve">
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
                                <td colspan="2" data-label="data2">Kearsarge</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">USS Kearsarge<br><br>Kearsarge-class Battleship</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Operator:</b></td>
                                <td colspan="2" data-label="data2">United States Navy</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Builder:</b></td>
                                <td colspan="2" data-label="data2">Newport News SB&DD</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Cost:</b></td>
                                <td colspan="2" data-label="data2"><b>-</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Predecessor:</b></td>
                                <td colspan="2" data-label="data2"><a href="class-4.php">USS Iowa</a>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Laid Down:</b></td>
                                <td colspan="2" data-label="data2">30 June 1896</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">24 March 1898</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">20 February 1900</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">18 May 1920<br><br>
                                    27 May 1914<br><br>
                                    31 March 1919
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Total Made:</b></td>
                                <td colspan="2" data-label="data2">2</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Fate:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>Retired</b></td>
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
                                <td colspan="2" data-label="data2">11,540 short tons (10,470 t)</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">375 ft 4 in (114.40 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">72 ft 2.5 in (22.009 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">23 ft 6 in (7.16 m)</td>
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
                                <td colspan="2" data-label="data2">16 kn (18 mph; 30 km/h) (design)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">38 officers and 548 or 549 enlisted men</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Armor:</b></td>
                                <td colspan="2" data-label="data2">
                                    Belt: 5–16.5 in (127–419 mm)<br><br>
                                    Barbettes: 12.5–15 in (318–381 mm)<br><br>
                                    Turrets (primary): 15–17 in (381–432 mm)<br><br>
                                    Turrets (secondary): 6–11 in (152–279 mm)<br><br>
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