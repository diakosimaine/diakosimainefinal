<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register"; // semicolon was missing here
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName); // corrected concatenation operator
if (!$conn) { // corrected the condition here
    die("Something went wrong: " . mysqli_connect_error()); // added error message
}
?>
