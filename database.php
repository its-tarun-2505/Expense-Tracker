<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "expense_tracker";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>