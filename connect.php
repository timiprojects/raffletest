<?php
$servername = "raffleng-mysqldbserver.mysql.database.azure.com";
$username = "raffleng";
$password = "RaffleTest2017";
$databasename = "rafflengdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error());
}
else {
    //print `<script>alert('connected');</script>`;
}
?>
