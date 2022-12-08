<?php

$username = "root";
$servername = "localhost";
$database = "anime";
$password = "";


$db_connection = new mysqli($servername, $username, $password, $database);

if ($db_connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
