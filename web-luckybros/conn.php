<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "web-luckybros";

/*$servername = "127.0.0.1:3306";
$username = "u652632623_carlo_db";
$password = "Tekfo-eclair02";
$db = "u652632623_carlo_db";*/

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("error bang");
}
