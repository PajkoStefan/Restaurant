<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Camille</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/menus.css">
    <link rel="stylesheet" type="text/css" href="../css/reservation.css">
    <link rel="stylesheet" type="text/css" href="../css/gallery.css">
    <link href="../css/signup.css" rel="stylesheet" type="text/css">
    <link href="../css/utilitis.css" rel="stylesheet" type="text/css">

</head>
<body>
<!--   Welcome to CAMILLE Restaurant -->

<div class="gl-container flex-del">

    <header id="menu-del" class="box-30 flex-del">
        <div>
            <div id="menu-logo">
                <img src="../images/m27-logo.png" alt="greska!">
            </div>
            <div id="gl-menu">
                <ul class="menu">
                    <li class="upcase"><a href="home.php">Home</a></li>
                    <li class="upcase"><a href="gallery.html">Gallery</a></li>
                    <li class="upcase">
                        <a href="menus.html">Menus</a>
                        <ul class="dropdown">
                            <li class="upcase"><a href="#">Breakfast</a></li>
                            <li class="upcase"><a href="#">Lunch</a></li>
                            <li class="upcase"><a href="#">Dinner</a></li>
                        </ul>
                    </li>
                    <li class="upcase"><a href="contact.php">Contact</a></li>
                    <li class="upcase blok"><a href="reservation.php">
                            Reservations
                            <!-- <button class="blok upcase>Reservations</button>-->
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="250" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13
                            &ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"></iframe>
            </div>
        </div>

    </header>

    <div id="body-del" class="box-70 body-del-contact ">
        <div id="contact-del" class="grid-del">

            <div class="contact-info flex-del">
                <h1>Opening Time</h1>
                <p>Mon - Fri: 6:00am - 24:00 pm
                    <span class="new-row">
                           Sat - Sun: 6:00am - 01:00 am
                           </span>
                </p>
                <h1>Contact Info</h1>
                <div class="flex-del">
                    <p>(+612) 9251 5600</p>
                    <i class="fas fa-phone"></i>
                </div>
                <div class="flex-del">
                    <p>info@domain.com </p>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="flex-del">
                    <p>PO Box 16122 Collins Street West Victoria 8007 America</p>
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
            <div class="contact-form ">
                <form id="contact" method="POST" action="../../backend/contactPHP.php" class="flex-del">
                    <fieldset>
                        <legend class="upcase">Contact US</legend>
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                        <input type="email" name="email" placeholder="Email">
                    </fieldset>
                    <p>Write your comment:</p>
                    <textarea id="comment" placeholder="Comment" rows="4" maxlength="400" name="comment"></textarea>
                    <button class="btn circle" type="submit" name="contact">Send</button>
                </form>
            </div>

        </div>


        <footer id="footer" class="pos-bottom">
            <div class="foot">
                <p>
                    Изработил: Стефан Анастасовски - 229/2015
                    <span class="new-row">
                   Веб Страна по предметот:  Мрежни и интернет апликации
               </span>
                    <span class="new-row">
                Ментор: Владимир Атанасовски
                </span>
                </p>

            </div>
        </footer>
    </div>

</div>






</body>
</html>
