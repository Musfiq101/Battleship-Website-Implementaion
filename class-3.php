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
        <h2 class="text-center">USS Indiana</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_Indiana.jpg" class="slider-image img-curve">
                <img src="images/USS_Indiana2.jpg" class="slider-image img-curve">
                <img src="images/USS_Indiana3.jpg" class="slider-image img-curve">
                <img src="images/USS_Indiana4.jpg" class="slider-image img-curve">
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
                                <td colspan="2" data-label="data2">Indiana</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">State of Indiana</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Operator:</b></td>
                                <td colspan="2" data-label="data2">United States Navy</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Builder:</b></td>
                                <td colspan="2" data-label="data2">	
                                    William Cramp & Sons (Indiana and Massachusetts)
                                    <br><br>Union Iron Works (Oregon)
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Cost:</b></td>
                                <td style="color:limegreen;" colspan="2" data-label="data2"><b>$6,000,000</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Predecessor:</b></td>
                                <td colspan="2" data-label="data2"><a href="class-1.php">USS Texas</a>
                                <br><br><a href="class-2.php">USS Maine</a>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">20 November 1895</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">20 November 1895</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">4 October 1919</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Sponsored By:</b></td>
                                <td colspan="2" data-label="data2">Indiana and Massachusetts</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Nickname:</b></td>
                                <td colspan="2" data-label="data2">-</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Total Made:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>3</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Status:</b></td>
                                <td colspan="2" data-label="data2">Preserved as a museum<br><br>Sold for scrap during World War II</td>
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
                                <td colspan="2" data-label="data2">10,288 long tons (10,453 t; 11,523 short tons)</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">351 ft (107 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">69 ft 3 in (21.11 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">27 ft (8.2 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Installed power:</b></td>
                                <td colspan="2" data-label="data2">9,000 ihp (6.7 MW) (design)
                                    <br><br>9,700–11,000 ihp (7.2–8.2 MW) (trial)
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Propulsion:</b></td>
                                <td colspan="2" data-label="data2">
                                    2 x vertical inverted triple expansion steam engines<br><br>
                                    2 x shafts<br><br>
                                    4 x double ended Scotch boilers
                                </td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Speed:</b></td>
                                <td colspan="2" data-label="data2">15 kn (28 km/h; 17 mph) (design)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">473 officers and men</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Armor:</b></td>
                                <td colspan="2" data-label="data2">
                                    4 × 13"/35 gun (2x2)<br><br>
                                    8 × 8"/35 gun (4x2)<br><br>
                                    12 × 3"/50 gun added 1910<br><br>
                                    20 × 6-pounders<br><br>
                                    6 × 1 pounder guns<br><br>
                                    6 × Whitehead torpedo tubes
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