<?php
$servername = "raffledraw-mysqldbserver.mysql.database.azure.com";
$username = "raffledbuser@raffledraw-mysqldbserver";
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
