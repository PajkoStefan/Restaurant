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
    <link href="../css/signup.css" rel="stylesheet" type="text/css">
    <link href="../css/utilitis.css" rel="stylesheet" type="text/css">

</head>

<body>

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
                    <li class="upcase"><a href="contact.phpl">Contact</a></li>
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
    <div class="box-70 body-del-registration" id="body-del">
        <div class="sign-up flex-del">
            <h1 class="display-block">Sign Up</h1>
            <div class="signup-forma flex-del">

                <form method="POST" action="../../backend/signupPHP.php">
                    <?php
                    if (isset($_GET['firstName'])) {
                        $first = $_GET['firstName'];
                        if(isset($_GET['lastName'])){
                            $last = $_GET['lastName'];
                            echo '<span class="flex-del"><input name="firstName" placeholder="First Name" value="' . $first . '" type="text" ><input name="lastName" placeholder="Last Name" value="' . $last . '" type="text" ></span>';
                        }
                        else{
                            echo '<span class="flex-del"><input name="firstName" placeholder="First Name" value="' . $first . '" type="text" ><input name="lastName" placeholder="Last Name" type="text" ></span>';
                        }
                    } else {
                        if(isset($_GET['lastName'])) {
                            $last = $_GET['lastName'];
                            echo '<span class="flex-del"><input name="firstName" placeholder="First Name" type="text" ><input name="lastName" placeholder="Last Name" value="' . $last . '" type="text" ></span>';
                        }
                        else{
                            echo '<span class="flex-del"><input name="firstName" placeholder="First Name" type="text" ><input name="lastName" placeholder="Last Name" type="text" ></span>';
                        }
                    }
//                    if (isset($_GET['lastName'])) {
//                        $last = $_GET['lastName'];
//                        echo '<span class="flex-del"><input name="lastName" placeholder="Last Name" value="' . $last . '" type="text" ></span>';
//
//                    } else {
//                        echo ' <span class="flex-del"><input name="lastName" placeholder="Last Name" type="text" ></span>';
//                    }
                    if (isset($_GET['username'])) {
                        $username = $_GET['username'];
                        echo '<input name="username" placeholder="Username" value="' . $username . '" type="text" >';
                    } else {
                        echo '<input name="username" placeholder="Username" type="text" >';
                    }
                    if (isset($_GET['email'])) {
                        $email = $_GET['email'];
                        echo '  <input name="email" placeholder="Email" value="'.$email.'" type="email">';
                    } else {
                        echo '    <input name="email" placeholder="Email" type="email">';
                    }
                    ?>
                    <input name="password" placeholder="Password" type="password">
                    <input name="confirmPassword" placeholder="Confirm Password" type="password">
                    <input class="btn circle" type="submit" value="Sign Up" name="signup">
                    <?php
//                    //                    $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//                    //                    if(strpos($fullURL, "signup=empty")==true){
//                    //                        echo "<p class='error'>You did not fill in all fields</p>";
//                    //                        exit();
//                    //                    }
//                    //                    elseif (strpos($fullURL, "signup=char")==true){
//                    //                        echo "<p class='error'>You used invalid characters!</p>";
//                    //                        exit();
//                    //                    }
//                    //                    elseif (strpos($fullURL, "signup=email")==true){
//                    //                        echo "<p class='error'>You used invalid e-mail!</p>";
//                    //                        exit();
//                    //                    }
//                    //                    elseif (strpos($fullURL, "signup=incorectpassword")==true){
//                    //                        echo "<p class='error'>Password don't match</p>";
//                    //                        exit();
//                    //                    }
//                    //                    elseif (strpos($fullURL, "signup=success")==true){
//                    //                        echo "<p class='success'>Sign Up Successful</p>";
//                    //                        echo "<div id='loginreview'><p class='success'>Login here</p></div>";
//                    //                        exit();
//                    //                    }
                    if (!isset($_GET['signup'])) {
                    } else {
                        $signupCheck = $_GET['signup'];
                        if ($signupCheck == "empty") {
                            echo "<p class='error'>You did not fill in all fields</p>";
                            exit();
                        } elseif ($signupCheck == "char") {
                            echo "<p class='error'>You used invalid characters!</p>";
                            exit();
                        } elseif ($signupCheck == "email") {
                            echo "<p class='error'>You used invalid e-mail!</p>";
                            exit();
                        } elseif ($signupCheck == "incorectpassword") {
                            echo "<p class='error'>Password don't match</p>";
                            exit();
                        } elseif ($signupCheck == "success") {
                            echo "<p class='success'>Sign Up Successful</p>";
                            echo "<div id='loginreview'><p class='success'>Login here</p></div>";
                            echo "<script src='../js/utilitis.js'> </script>";
                            echo "<script src='../js/signup.js'> </script>";

                        }

                    }
//                    ?>
                </form>
            </div>
            <footer class="pos-bottom" id="footer">
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
</div>


</body>
</html>
