<?php
$servername = "localhost";
$username = "rafflex";
$password = "RaffleTest2017";
$databasename = "rafflex";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error());
}
else {
    //print ('connected');
}
?>
