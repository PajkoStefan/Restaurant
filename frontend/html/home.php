<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Camille</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet" type="text/css">
    <link href="../css/contact.css" rel="stylesheet" type="text/css">
    <link href="../css/menus.css" rel="stylesheet" type="text/css">
    <link href="../css/reservation.css" rel="stylesheet" type="text/css">
    <link href="../css/gallery.css" rel="stylesheet" type="text/css">

    <link href="../css/utilitis.css" rel="stylesheet" type="text/css">

</head>
<body>
<!--   Welcome to CAMILLE Restaurant -->

<div class="gl-container flex-del">

    <header class="box-30 flex-del" id="menu-del">
        <div>
            <div id="menu-logo">
                <img alt="greska!" src="../images/m27-logo.png">
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
                            <!-- <button class="blok upcase">
                                Reservations
                             </button> -->
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe frameborder="0" height="250" id="gmap_canvas"
                        marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13
                            &ie=UTF8&iwloc=&output=embed"
                        width="100%"></iframe>
            </div>
        </div>

    </header>

    <div class="box-70" id="body-del">

        <div class="poz-slika1" id="top-page">
            <div class="welcome">
                <h1>Welcome to <span class="upcase col-gold">Camille</span> Restaurant</h1>
            </div>


        </div>

        <div class="body-del1 container-2 flex-del bg-color-grey">
            <div class="container-1 flex-del">
                <div class="ukras1">
                    <img alt="greska!" src="../images/m27-bg1.png">
                </div>
                <h1>Italian Luxury Restaurant</h1>
                <div class="ukras2">
                    <img alt="greska!" src="../images/m27-bg2.png">
                </div>
            </div>
            <div class="blok-del">

                <div class="text-del">
                    <p>

                        Passionately personal and genuinely delicious!
                        Located in Middlebury, Connecticut, Camille is an
                        inviting 90 seat restaurant owned
                        and operated by accomplished Chef Jerry Clark.
                        "Like you, I enjoy food that satisfies the soul
                        as well as the palate," says Jerry. "Food excites
                        the imagination along with the taste buds. So,
                        I invite you to experience food that holds the
                        promise of a good story!"

                        Camille offers exceptional gourmet American Cuisine
                        with an Italian flair - served in a warm atmosphere
                        where the emphasis is on comfort, taste and above all,
                        relaxation and enjoyment. Grilled NY Strip with
                        Baked Mac n Cheese and Sweet Onion Jam laced
                        Demi-Glace; Angelhair pasta with Shrimp,
                        diced tomatoes, spinach, roasted red peppers
                        & lemon vodka cream sauce; and Grilled Salmon
                        with farro & cranberry salad with mustard sauce
                        are just a few of the special dishes you'll find
                        on Camille's enticing menu. Cap off your main course
                        with a Cappuccino and one of our specialty desserts
                        such as Banana Napoleon or Creme Brulee. Enjoy a glass
                        of fine wine, or indulge in a specialty martini
                        or after-dinner cordial.

                        At Camille, we turn the ordinary into the extraordinary
                        every day. So, stop in for a romantic dinner,
                        relaxing lunch, or after work gathering at our cozy,
                        sit-down bar...make everyday life a little more
                        special at Camille Restaurant!

                    </p>
                </div>
            </div>

            <div>
                <figure id="figura-1">
                    <div class="f1-slika">
                        <img alt="greska!" src="../images/m27-bg3.png">
                    </div>
                    <figcaption><h3>Jerry Clark - Founder</h3></figcaption>
                </figure>
            </div>
        </div>

        <div class="body-del1 container-2 flex-del">

            <h1 class="col-gold font_tangerine naslov">
                Our
                <span class="new-row col-black">Daily Menu</span>
            </h1>

            <div class="bdt_cenovnik flex-del">

                <div class="cen_box box-33">
                    <form>
                        <fieldset>
                            <legend><h1>Breakfast</h1></legend>

                            <div class="cb_sodr">
                                <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div class="cbs_slika">
                                    <div class="ukras2">
                                        <img alt="greska"
                                             src="https://i1.wp.com/camille.la-studioweb.com/wp-content/uploads/2018/04/m27-bg2.png?fit=67%2C27&zoom=2&ssl=1">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div class="order">
                        <button class="btn-order attr-cursor" id="btn-breakfast">ORDER</button>
                    </div>
                </div>
                <div class="cen_box box-33">
                    <form>
                        <fieldset>
                            <legend><h1>Lunch</h1></legend>

                            <div class="cb_sodr">
                                <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                           x     <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div class="cbs_slika">
                                    <div class="ukras2">
                                        <img alt="greska"
                                             src="https://i1.wp.com/camille.la-studioweb.com/wp-content/uploads/2018/04/m27-bg2.png?fit=67%2C27&zoom=2&ssl=1">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <div class="order">
                        <button class="btn-order attr-cursor" id="btn-lunch">ORDER</button>
                    </div>

                </div>
                <div class="cen_box box-33">
                    <form>
                        <fieldset>
                            <legend><h1>Dinner</h1></legend>

                            <div class="cb_sodr">
                                <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <div class="star_del"><p>Cake Caramel</p>
                                        <div class="star"><i class="fas fa-star"></i></div>
                                    </div>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div>
                                    <p>Cake Caramel</p>
                                    <p>$2.00</p>
                                </div>
                                <div class="cbs_slika">
                                    <div class="ukras2">
                                        <img alt="greska"
                                             src="https://i1.wp.com/camille.la-studioweb.com/wp-content/uploads/2018/04/m27-bg2.png?fit=67%2C27&zoom=2&ssl=1">
                                    </div>
                                </div>

                            </div>

                        </fieldset>

                    </form>
                    <div class="order">
                        <button class="btn-order attr-cursor" id="btn-dinner">ORDER</button>
                    </div>
                </div>


            </div>

        </div>

        <div class="bd_cetvrt bg-color-grey">
            <div class="bdc_prvaslika">

                <img alt="greska" src="../images/m27-pf1.jpg">

            </div>

            <div class="bdc_drugisliki">
                <div class="bdc_dslika">

                    <img alt="greska" src="../images/m27-pf2.jpg">

                </div>
                <div class="bdc_dslika">

                    <img alt="greska" src="../images/m27-pf3.jpg">

                </div>
            </div>
            <button class="btn gallery-btn attr-cursor" name="gallery" onclick="otherPage('gallery.html')">View our
                gallery
            </button>

        </div>

        <div class="body-del1 container-2 flex-del" id="review-del" >

            <h1 class="col-gold font_tangerine naslov review-header">
                Your
                <span class="new-row col-black"> Review</span>
            </h1>

            <div class="review flex-del flex-dir-column">
                <?php
                if (isset($_GET['login'])) {
                    $length =$_GET;
                    $loginCheck =  $_GET['login'];
                    if (count($length) > 1) {
                        if ($loginCheck == "success") {
                            echo "<p class='success text-align-center'>Login Success <span class='new-row'>Username: "
                                . $_SESSION['username'] . "</span>  </p>";
                        } elseif ($_GET['login'] == 'success' && $_GET['review'] == 'send') {
                            echo "<p class='success text-align-center'>Review send, thank you!</span>  </p>";
                        }
                    } else {
                        if ($loginCheck == "incorrect") {
                            echo "<p class='error text-align-center'>The username or password is incorrect!</p>";
                        }
                    }
                }
                ?>
                <p class="review-hide">If you want to send a review, You must log in first: </p>
                <span class="flex-del flex-dir-column review-hide">
                        <form method="POST" action="../../backend/homePHP.php">
                            <span class="flex-del">
                                <input class="box-50 margin-right" name="username" placeholder="Username" type="text">
                                <input class="box-50 margin-left" name="password" placeholder="Password"
                                       type="password">
                            </span>
                            <button class="btn attr-cursor" name="login">Login</button>
                        </form>
                      <button class="btn attr-cursor" name="sign-up"
                              onclick="otherPage('./signup.php')">Sign Up</button>
                </span>

            </div>

        </div>

        <div class="body-del1 container-2 flex-del bg-color-grey">

            <h1 class="col-gold font_tangerine naslov">
                Make
                <span class="new-row col-black"> Reservations</span>
            </h1>
            <div class="container-2 reservation">
                <p>To make Reservations, please click the button below</p>
                <button class="btn attr-cursor" name="reservation-btn" onclick="otherPage('reservation.php')">
                    Reservations
                </button>
            </div>
        </div>

        <footer id="footer">
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

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
    ></script>
    <script src="../js/utilitis.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/signup.js"></script>
    <script src='../js/homeafterlogin.js'></script>

</div>
</body>

</html>
