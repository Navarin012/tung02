<?php

// $servername = "localhost";
// $username = "root";
// $password = "12345678";
// $dbname = "web2111";

$servername = "localhost";
$username = "it65309010002";
$password = "it12345";
$dbname = "it65309010002";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


