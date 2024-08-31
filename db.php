<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "e-ticket";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Connection error' . mysqli_connect_error());
}