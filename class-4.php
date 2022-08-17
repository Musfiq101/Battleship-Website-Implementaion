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
        <h2 class="text-center">USS Iowa</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_Iowa1.jpg" class="slider-image img-curve">
                <img src="images/USS_Iowa2.jpg" class="slider-image img-curve">
                <img src="images/USS_Iowa3.jpg" class="slider-image img-curve">
                <img src="images/USS_Iowa4.jpg" class="slider-image img-curve">
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
                                <td colspan="2" data-label="data2">Iowa</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">USS Iowa<br><br>Coast Battleship No. 4</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Operator:</b></td>
                                <td colspan="2" data-label="data2">United States Navy</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Builder:</b></td>
                                <td colspan="2" data-label="data2">William Cramp & Sons</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Cost:</b></td>
                                <td style="color:limegreen;" colspan="2" data-label="data2"><b>$3,000,000</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Predecessor:</b></td>
                                <td colspan="2" data-label="data2"><a href="class-3.php">USS Indiana</a>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Laid Down:</b></td>
                                <td colspan="2" data-label="data2">5 August 1893</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">28 March 1896</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">16 June 1897</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">30 June 1903<br><br>
                                    27 May 1914<br><br>
                                    31 March 1919
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Maiden voyage:</b></td>
                                <td colspan="2" data-label="data2">Atlantic Coast</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Fate:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>Sunk as gunnery target <br><br>23 March 1923</b></td>
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
                                <td colspan="2" data-label="data2">11,346 long tons (11,528 t)</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">360 ft (110 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">72.1 ft (22.0 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">24 ft (7.3 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Installed power:</b></td>
                                <td colspan="2" data-label="data2">11,000 ihp (8,200 kW)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Propulsion:</b></td>
                                <td colspan="2" data-label="data2">                                   	
                                    2 × vertical reciprocating steam engines<br><br>
                                    2 × screws
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Speed:</b></td>
                                <td colspan="2" data-label="data2">17 kn (20 mph; 31 km/h)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">727 officers and men</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Armor:</b></td>
                                <td colspan="2" data-label="data2">
                                    Harvey<br><br><br><br>
                                    Belt: 4–14 in (102–356 mm)<br><br>
                                    Barbettes: 12.5–15 in (318–381 mm)<br><br>
                                    Turret (Mains): 15–17 in (381–432 mm)<br><br>
                                    Turret (secondary): 4–8 in (102–203 mm)<br><br>
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