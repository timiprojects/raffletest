
<html>
<?php
    require 'connect.php';
    
    $q = $_REQUEST["reference"];
    $email = $_REQUEST["email"];
    

    if (!$q) {
        //header('location: index.php');
    }
    else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fullname = $_POST['fullname'];
            $emails = $email;
            $reference = $q;
            $phonenumber = $_POST['phonenumber'];
            $address = $_POST['address'];

            $query = "INSERT INTO users (fullname, email, reference, phonenumber, address) VALUES ('$fullname', '$emails', '$reference', '$phonenumber', '$address')";
            $result = $conn->query($query);
            if($result) {
                header('location: thankyou.html');
            }
            else {
                echo "Try Again!!";
            }
        }
    }
    
    $conn->close();
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='./css/home.css'>
</head>
<body>
    <div class="grid-container row">
        <div class="grid-item-l col-12">
            <h1>Almost there!&nbsp;<?php echo strtoupper(substr($email, 0, 4)); ?></h1>
            <p>You have successfully purchased <br> a raffle ticket.</p>
            <p>This is your <strong>reference</strong> number.</p>
            <h3><strong style="background: black;"><?php echo $q; ?></strong></h3>
            <p>Please keep it safe and watch out for <br> weekly draws.</p>
            <p>May the odds be in your favour.</p>
            <hr/>
            <br/>
            <h5>PS: Kindly fill the form on the right to
            complete the registration. Thank you.!</h5>

        </div>
        <div class="grid-item-r col-12">
            <div class="card">
                <div class="content">
                    <h3>Fill in your details</h3>
                    <h5>Your information won't be shared with the public.</h5>
                </div>
                <form class="form" method="POST" action="">
                    <div class="form-group input-addon">
                        <input id="fullname" name="fullname" class="form-control" type="text" placeholder="fullname"/>
                    </div>
                    <div class="form-group input-addon">
                        <input id="email" name="email" class="form-control" type="email" value="<?php echo $email; ?>" disabled/>
                    </div>
                    <div class="form-group input-addon">
                        <input id="reference" name="reference" class="form-control" type="text" value="<?php echo $q; ?>" disabled/>
                    </div>
                    <div class="form-group input-addon">
                        <input id="phonenumber" name="phonenumber" class="form-control" type="tel" placeholder="phone number"/>
                    </div>
                    <div class="form-group input-addon">
                        <textarea id="address" name="address" class="form-control" type="text" placeholder="address"></textarea>
                    </div>
                    <div class="form-group input-addon">
                        <button class="btn btn-success btn-block" type="submit" class="glyphicon glyphicon-save"></i> Save</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>