<?php

$host = "localhost";
$username = "root";
$password = "MJNA@mawmaw1507";
$database = "prk";

$conn = new mysqli(
    $host, 
    $username, 
    $password, 
    $database
);

if($conn->connect_error) {
    die('Fail to connect');
}
