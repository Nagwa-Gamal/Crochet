<?php
//Login data for the database. Use this file in all Models
$host = "localhost";
$user = "root";
$passwd = "";
$database = "crochet_db";

// Create connection
$conn = new mysqli($host, $user, $passwd, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>