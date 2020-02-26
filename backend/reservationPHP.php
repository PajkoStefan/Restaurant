<?php

include 'database_connection.php';

//if ($result)
//    echo 'data inserted successfully';
$sql = "CREATE TABLE reservation(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY , 
    reservation_number VARCHAR(10) NOT NULL,
    title VARCHAR(10) NOT NULL,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(35) NOT NULL,
    email VARCHAR(50) NOT NULL,
    nation VARCHAR(25) NOT NULL,
    country VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    type_of_table VARCHAR(20) NOT NULL,
    purpose VARCHAR(20) NOT NULL,
    meal VARCHAR(30) NOT NULL,
    time VARCHAR(6) NOT NULL,
    date VARCHAR(10) NOT NULL
)";

$result = mysqli_query($conn, $sql);

if(isset($_POST['reservation'])){
    echo "is set";
    $restitle = $_POST['title'];
    $resfname = $_POST['fname'];
    $reslname = $_POST['lname'];
    $resemail = $_POST['email'];
    $resnation = $_POST['nation'];
    $rescountry = $_POST['country'];
    $resphone = $_POST['phone'];
    $restableNum = $_POST['table'];
    $respurpose = $_POST['purpose'];
    $resmeal = $_POST['meal'];
    $restime = $_POST['time'];
    $resdate = $_POST['date'];

    require 'functions.php';
    $randomResNumber = generateCode(10);



    $sql = "INSERT INTO reservation (reservation_number, title, first_name, last_name, email, nation, country, 
                         phone, type_of_table,purpose,meal,time,date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        #code
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $randomResNumber, $restitle, $resfname,
            $reslname, $resemail, $resnation, $rescountry, $resphone,
            $restableNum, $respurpose, $resmeal, $restime, $resdate );
        mysqli_stmt_execute($stmt);
    }
    header("Location: ../frontend/html/reservation.php?reservation=success");
}
?>

