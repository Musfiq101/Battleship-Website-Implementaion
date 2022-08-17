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
        <h2 class="text-center">USS Texas</h2>
        <div class="slide-container">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-container-1">
                <img src="images/USS_Texas.jpg" class="slider-image img-curve">
                <img src="images/USS_Texas2.jpg" class="slider-image img-curve">
                <img src="images/USS_Texas3.jpg" class="slider-image img-curve">
                <img src="images/USS_Texas4.jpg" class="slider-image img-curve">
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
                                <td colspan="2" data-label="data2">Texas</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Namesake:</b></td>
                                <td colspan="2" data-label="data2">State of Texas</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Ordered:</b></td>
                                <td colspan="2" data-label="data2">3 August 1886</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Builder:</b></td>
                                <td colspan="2" data-label="data2">Norfolk Naval Shipyard<br><br> Portsmouth, Virginia</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Cost:</b></td>
                                <td style="color:limegreen;" colspan="2" data-label="data2"><b>$4,202,121.49</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Laid Down:</b></td>
                                <td colspan="2" data-label="data2">1 June 1889</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Launched:</b></td>
                                <td colspan="2" data-label="data2">28 June 1892</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Commissioned:</b></td>
                                <td colspan="2" data-label="data2">15 August 1895</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Decommissioned:</b></td>
                                <td colspan="2" data-label="data2">11 February 1911</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Struck:</b></td>
                                <td colspan="2" data-label="data2">10 October 1911</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Nickname:</b></td>
                                <td colspan="2" data-label="data2">Old Hoodoo</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Fate:</b></td>
                                <td style="color: red;" colspan="2" data-label="data2"><b>Sunk as gunnery target<br><br> 21-22 March 1912</b></td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Status:</b></td>
                                <td colspan="2" data-label="data2">Remains buried in the mud off Tangier, Virginia</td>
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
                                <td style="color:blue;" colspan="2" data-label="data2"><b>Battleship</b></td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Displacement:</b></td>
                                <td colspan="2" data-label="data2">6,316 long tons (6,417 t) <br><br>full load (1896)</td>
                            </tr>
                            <tr>
                                <td data-label="data1"><b>Length:</b></td>
                                <td colspan="2" data-label="data2">308 ft 10 in (94.1 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Beam:</b></td>
                                <td colspan="2" data-label="data2">64 ft 1 in (19.5 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Draft:</b></td>
                                <td colspan="2" data-label="data2">24 ft 6 in (7.5 m)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Installed power:</b></td>
                                <td colspan="2" data-label="data2">8,610 ihp (6,420 kW)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Propulsion:</b></td>
                                <td colspan="2" data-label="data2">2 × vertical triple-expansion steam engines <br><br>2 × screws, 4 × boilers</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Speed:</b></td>
                                <td colspan="2" data-label="data2">17.8 knots (33.0 km/h; 20.5 mph)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Complement:</b></td>
                                <td colspan="2" data-label="data2">	392 officers and men (1896)</td>
                            </tr>

                            <tr>
                                <td data-label="data1"><b>Armor:</b></td>
                                <td colspan="2" data-label="data2">Belt: 12 in (305 mm)
                                    <br><br>Deck: 1–3 in (25–76 mm)
                                    <br><br>Redoubt: 12 in (305 mm)
                                    <br><br>Turrets: 1–3 in (25–76 mm)
                                    <br><br>Conning Tower: 9 in (229 mm)
                                    <br><br>Bulkheads: 8 in (203 mm)</td>
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
            <?php
                echo '<form action="#">
                    <input type="hidden" name="uid" value="anonymous">
                    <input type="hidden" name="date" value="".date("Y-m-d H:i:s")."">
                    <textarea name="comment" placeholder="Type your thoughts..."></textarea>
                    <button type="submit" class="btn2">Submit</button><br><br>
                </form>';
            ?>
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
