<?php
session_start();

include 'database_connection.php';
//if ($result)
//    echo 'data inserted successfully';
$sql = "CREATE TABLE review(
        id INT AUTO_INCREMENT NOT NULL  PRIMARY KEY ,
        review_number VARCHAR(10) NOT NULL,
        username VARCHAR(40) NOT NULL,
        review VARCHAR (400) NOT NULL,
        rating INT NOT NULL
    )";

$result = mysqli_query($conn, $sql);
$sql = "SELECT  id, username, password FROM signup";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
//echo $resultCheck;

$arrayUsernameId = array();
$arrayUsernamePass = array();

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

//        echo $row['id'] . "\n";
//        echo $row['username'] . "<br>";
        $arrayUsernameId[$row['username']] = $row['id'];
        $arrayUsernamePass[$row['id']] = $row['password'];
    }
//    print_r($arrayUsername);
    $usernameKeysId = array_keys($arrayUsernameId);
    $usernameValuesId = array_values($arrayUsernameId);
    //$arrayUsernameId ===> username : id;
    //$arrayUsernamePass ===> id : password;
    $usernameKeysPass = array_keys($arrayUsernamePass);
    $usernameValuesPass = array_values($arrayUsernamePass);
//    print_r($usernameKeys);
//    print_r($usernameValues);
//    print_r($usernamePassKeys);
//    print_r($usernamePassValues);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $password = $_POST['password'];
    $usernamesLength = count($usernameKeysId);
    foreach ($usernameKeysId as $user) {
        if ($username == $user) {
            echo "User exist: " . $user;
            $usernameId = $arrayUsernameId[$username];
            $_SESSION['usernameId'] = $usernameId;
            $usernamePassword = $arrayUsernamePass[$usernameId];
            if ($password == $usernamePassword) {
                header("Location: ../frontend/html/home.php?login=success&username=$user");
                echo "<p>$user</p>";
                echo "Password is correct";
            }
        } else {
            header("Location: ../frontend/html/home.php?login=incorrect");
        }
    }


}



if (isset($_POST['review-btn'])) {
    $username = $_SESSION['username'];
    header("Location: ../frontend/html/home.php?login=success&username=$username&review=send");
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    $sqlCount = "SELECT count(*) FROM review";
    $result = mysqli_query($conn, $sqlCount);
    $resultCheck = mysqli_fetch_row($result)[0];
    if($resultCheck == 0){
        $randReviewNumber = 1;
    }
    else if($resultCheck > 0){
        $sqlLastReviewNumber = "SELECT review_number FROM review ORDER BY review_number DESC LIMIT 1";
        $result = mysqli_query($conn, $sqlLastReviewNumber);
        $randReviewNumber = mysqli_fetch_row($result)[0];
        $randReviewNumber += 1;

    }

    require 'functions.php';
//    $randReviewNumber = generateCode(10);
    $sql = "INSERT INTO review (`review_number`,`username`, `review`,`rating`) 
            VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        #code
        mysqli_stmt_bind_param($stmt, "ssss",
            $randReviewNumber, $username, $review, $rating);
        mysqli_stmt_execute($stmt);
    }
    echo "is set $review $rating";

}
if (isset($_POST['logout'])) {
    $logout = $_POST['logout'];
    session_unset();
    header("Location: ../frontend/html/home.php?login=logout");


}
error_reporting(E_ALL);
//print_r(mysqli_error_list($conn));
?>