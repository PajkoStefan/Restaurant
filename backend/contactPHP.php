<?php

include 'database_connection.php';

//if ($result)
//    echo 'data inserted successfully';
$sql = "CREATE TABLE contact(
    id INT AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(40) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    comment VARCHAR(300) NOT NULL,
    PRIMARY KEY (id)
)";
$result = mysqli_query($conn, $sql);

if (isset($_POST['contact'])) {
//    echo "is set";
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

//    echo $first_name . $last_name . $email . $comment;


    $sql = "INSERT INTO contact (first_name, last_name, email, comment) 
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        #code
        mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $comment);
        mysqli_stmt_execute($stmt);
        header("Location: ../frontend/html/contact.php?contact=success");
    }


}


