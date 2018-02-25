
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP TEST RAFFLE</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='./css/home.css'>
</head>
<body>
    <div class="grid-container row">
        <div class="grid-item-l col-12">
            <h1>WELCOME!</h1>
            <p>Here for the Raffle?</p>
            <p>This attracts a fee of </p>
            <h3><strong style="background: black;">#200</strong></h3>
            <p>to get a ticket.</p>
            <p>May the odds be in your favour.</p>
            <hr/>
            <br/>
            <h5>PS: Kindly fill the form on the right to
            make payments. Thank you.!</h5>
        </div>
        <div class="grid-item-r col-12">
            <div class="card">
                <div class="content">
                    <h3>Fill in the field</h3>
                    <h5>Your information won't be shared with the public.</h5>
                </div>
                <form id="form" class="form form-vertical">
                    <div class="form-group input-addon">
                        <input id="email" class="form-control" type="text" placeholder="enter email"/> 
                    </div>
                    <div class="form-group input-addon">
                        <button id="submit" class="btn btn-primary btn-block" type="button" onclick="payWithPaystack()"><i class="glyphicon glyphicon-person"></i> Pay Now </button>
                    </div>
                    
                </form>
                <div class="form-group">
                    <a href="#" class="text-danger">Already Paid? Go here..</a>
                </div> 
            </div>
        </div>
    </div>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
  function payWithPaystack(){
    var email_value = document.getElementById('email').value;
    var button = document.getElementById('submit');
    var handler = PaystackPop.setup({
      key: 'pk_test_6d9060c356f6aad0d9a0cfbd47dea671a1bcd105',
      email: email_value,
      amount: 10000,
      ref: this.randomize(), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number"
            }
         ]
      },
      callback: function(response){
        //alert('success. transaction ref is ' + response.reference);
        //console.log(response);
        
        // window.location = "fill.php?email=" + email_value + "&" + "reference=" + response.reference;
        var urlString = "email=" + email_value + "&reference=" + response.reference;

        $.ajax
        ({
            url: "ref.php",
            type : "POST",
            cache : false,
            data : urlString,
            success: function(response)
            {
                window.location = "fill.php?email=" + email_value + "&" + "reference=" + response.reference;
            }
        });

      },
      onClose: function(){
        button.removeAttribute('disabled');
        button.innerText = "Pay Now";
      }
    });
    handler.openIframe();
    
    button.innerText = "Please Wait..";
    button.setAttribute('disabled', true);
  }

  function randomize () {
    let text = "";
    let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( let i=0; i < 10; i++ )
      text += possible.charAt(Math.floor(Math.random() * possible.length));
      //console.log(text);
    return text;
    
  }
  
</script>
</body>
</html>