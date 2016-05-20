<?php

$servername = "sql1.njit.edu";
$username = "ps539";
$password = "dJ15X8Sj";
$dbname = "ps539";

// Create connection
$link= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>