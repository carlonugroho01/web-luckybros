<?php

include 'conn.php';
if (isset($_POST['sendMessageButton'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (`name`, `email`, `phone`,`message`)
        VALUES ('$name', '$email', '$phone','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message succesfully sent!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

include 'header.php';
