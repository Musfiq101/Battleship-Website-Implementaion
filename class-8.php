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
        <h2 class="text-center">USS Mississippi</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_mississippi1.jpg" class="slider-image img-curve">
                <img src="images/USS_mississippi2.jpg" class="slider-image img-curve">
                <img src="images/USS_mississippi3.jpg" class="slider-image img-curve">
                <img src="images/USS_mississippi4.jpg" class="slider-image img-curve">
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
                                <td colspan="2" data-label="data2">Mississippi</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">USS Mississippi</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Operator:</b></td>
                                <td colspan="2" data-label="data2">United States<br><br>Greece</td>
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
                                <td data-label="data1"><b>Laid Down:</b></td>
                                <td colspan="2" data-label="data2">1903</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">1904</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">1908</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">1916</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Total Made:</b></td>
                                <td colspan="2" data-label="data2">2</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Victories:</b></td>
                                <td colspan="2" data-label="data2">None</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Fate:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>Sunk as a target ship</b></td>
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
                                <td colspan="2" data-label="data2">13,000 tons (standard)</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">	382 ft</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">77 ft</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">24 ft 7 in</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Propulsion:</b></td>
                                <td colspan="2" data-label="data2">
                                    3 x expansion reciprocating engines<br><br>
                                    2 x propellers<br><br>
                                    10,000 horsepower                                 	
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Speed:</b></td>
                                <td colspan="2" data-label="data2">17 knots</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">744 officers and men</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Loadout:</b></td>
                                <td colspan="2" data-label="data2">                                   	
                                    4 × 12"/45 guns (2×2)<br><br>
                                    8 × 8"/45 guns (4×2)<br><br>
                                    8 × 7"/45 guns (8×1)<br><br>
                                    12 × 3"/50 guns (12×1)<br><br>
                                    2 × 21-inch (533 mm) torpedo tubes
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