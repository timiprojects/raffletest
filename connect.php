<?php
$servername = "tcp:rafflex.database.windows.net,1433";
$username = "rafflex";
$password = "RaffleTest2017";
$databasename = "raffletestdb";
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