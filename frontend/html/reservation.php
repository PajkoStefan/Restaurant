<?php
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

    <div class="box-70 body-del-reservation" id="body-del">
        <div class="re" id="page-inner">
            <form action="../../backend/reservationPHP.php" method="POST">
                <div class="row">
                    <h1 class="page-header">TABLE RESERVATION</h1>
                </div>
                    <div class="row flex-del">
                        <div class="box-50 levo">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="ph-naslov">PERSONAL INFORMATION</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Title*:</label>
                                        <select class="form-control" name="title" required>
                                            <option selected value></option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="new-row">First Name:</label>
                                        <input class="form-control" name="fname" required type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="new-row">Last Name:</label>
                                        <input class="form-control" name="lname" required type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="new-row">Email:</label>
                                        <input class="form-control" name="email" required type="text">
                                    </div>
                                    <div class="form-group flex-del">
                                        <label class="new-row">Nationality*:</label>
                                        <span class="radio-buttons">
                                                    <label class="radio-inline">
                                                        <input checked="" name="nation" type="radio" value="">American
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input name="nation" type="radio" value="Foreigner">Foreigner
                                                    </label>
                                                </span>
                                    </div>
                                    <div class="form-group">
                                        <label>Country*:</label>
                                        <input class="form-control" name="country" required value="">

                                    </div>
                                    <div class="form-group">
                                        <label class="new-row">Phone Number:</label>
                                        <input class="form-control" name="phone" required type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row box-50 desno">
                            <div class="d1">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="ph-naslov">RESERVATION INFORMATION</h3></div>

                                    <div class="panel-body">
                                        <div class="form-group">

                                            <label>Type Of Table:</label>
                                            <select class="form-control" name="table" required>
                                                <option selected value></option>
                                                <option value="Table for 2">Table for 2</option>
                                                <option value="Table for 3">Table for 3</option>
                                                <option value="4">Table for 4</option>
                                                <option value="Table for 5">Table for 5</option>
                                                <option value="Table for 6">Table for 6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Purpose:</label>
                                            <select class="form-control" name="purpose" required>
                                                <option selected value></option>
                                                <option value="Meeting">Meeting</option>
                                                <option value="Casual">Casual</option>
                                                <option value="Celebration">Celebration</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Meal Plan:</label>
                                            <select class="form-control" name="meal" required>
                                                <option selected value></option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Dinner">Dinner</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Time:</label>
                                            <input class="form-control" name="time" type="time">
                                        </div>
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input class="form-control" name="date" type="date">
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="btn-reservation">
                            <button id="reservation-btn" class="btn circle" name="reservation" type="submit">Reservation</button>
                        </div>
                    </div>
                </form>
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

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
></script>
<?php
$namescript = "reservation.js";
echo "<script src=$namescript> </script> ";
?>
</body>
</html>

