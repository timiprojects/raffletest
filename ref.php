<?php 
    require 'connect.php';

            $reference = $_REQUEST["reference"];
            $email = $_REQUEST["email"];

            $reference = $conn->real_escape_string($reference);
            $email = $conn->real_escape_string($email);

            $query = "INSERT INTO paystack (email, reference) VALUES ('$email', '$reference')";
            $result = $conn->query($query);
            if($result) {
                echo "success!";
            }
            else {
                echo "Try Again!!";
            }

            $conn->close();
?>