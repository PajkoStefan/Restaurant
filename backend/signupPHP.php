<?php
//Database credentials
//create database and tables
include 'database_connection.php';

$sql = "CREATE DATABASE miaProjectDB";
$result = mysqli_query($conn, $sql);

$sql = "CREATE TABLE signup(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
    username Varchar(40) NOT NULL,
    email VARCHAR (50) NOT NULL,
    password VARCHAR (40) NOT NULL
)";

$result = mysqli_query($conn, $sql);

if (isset($_POST['signup'])) {
//    include_once 'db'
    $signupFirstName = ucfirst(mysqli_real_escape_string($conn, $_POST['firstName']));
    $signupLastName = ucfirst(mysqli_real_escape_string($conn, $_POST['lastName']));
    $signupUsername =strtolower(mysqli_real_escape_string($conn, $_POST['username']));
    $signupEmail = strtolower(mysqli_real_escape_string($conn, $_POST['email']));
    $signupPassword = mysqli_real_escape_string($conn, $_POST['password']);
    $signupConfirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
// zamerka zastiti ga password
    if (empty($signupFirstName) &&
        empty($signupLastName) &&
        empty($signupUsername) &&
        empty($signupEmail) &&
        empty($signupPassword) &&
        empty($signupConfirmPasswosrd)) {
        header("Location: ../frontend/html/signup.php?signup=empty");
        exit();
    }
    else {
        if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupFirstName) ||
            !preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupLastName) ||
            !preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupUsername)){
            //proverka 2**3 = 8 proverke za tocni
                if(!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupFirstName)){
                    if(!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupLastName) &&
                        !preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupUsername)){
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail");
                        exit();
                    }
                    elseif(!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupLastName)){
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&username=$signupUsername");
                        exit();
                    }
                    elseif (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupUsername)){
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&lastName=$signupLastName");
                        exit();
                    }
                    else{
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&lastName=$signupLastName&username=$signupUsername");
                        exit();
                    }
                }
                elseif (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupLastName)){
                    if(!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupUsername)){
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&firstName=$signupFirstName");
                        exit();
                    }
                    else{
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&firstName=$signupFirstName&username=$signupUsername");
                        exit();
                    }
                }
                else{
                    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $signupUsername)){
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&firstName=$signupFirstName&lastName=$signupLastName");
                        exit();
                    }
                    else{
                        header("Location: ../frontend/html/signup.php?signup=char&email=$signupEmail&firstName=$signupFirstName&lastName=$signupLastName");
                        exit();
                    }
                }
        }
        else {
            if (!filter_var($signupEmail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../frontend/html/signup.php?signup=email&firstName=$signupFirstName&lastName=$signupLastName&username=$signupUsername&username=$signupUsername");
                exit();
            } else {
                if ((strlen($signupPassword) > 6) && $signupPassword === $signupConfirmPassword) {
                    $sql = "INSERT INTO signup (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    } else {
                        #code
                        mysqli_stmt_bind_param($stmt, "sssss", $signupFirstName, $signupLastName, $signupUsername, $signupEmail, $signupPassword);
                        mysqli_stmt_execute($stmt);
                    }
                    header("Location: ../frontend/html/signup.php?signup=success");
                    exit();

                } else {
                    header("Location:../frontend/html/signup.php?signup=incorectpassword&firstName=$signupFirstName&lastName=$signupLastName&username=$signupUsername\"");
                    exit();
                }
            }
        }
    }
}
else{
    header("Location: ../frontend/html/signup.php?signup=error");
}

?>

