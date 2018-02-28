<?php 
require 'connect.php';
$query = "SELECT * FROM users";
$result = $conn->query($query);


?>

<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>draw</title>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  	<div class="container">
  		<div class="row topbox">
		  	<div class="row">
				<div class="col-md-12" style="text-align:center">
					<div id="log"></div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<div id="msgbox"class="alert alert-warning" style="margin-top:20px;display:none;">You need to add at least 2 lines!</div>
				</div>
				
			</div>
			<div class="col-md-6 col-md-offset-3 rollbox">
				<div class="line"></div>
				<table>
					<tr id="loadout"></tr>
				</table>
			</div>
		</div>
		<button id="roll" class="btn btn-spin">SPIN</button>
		<div id='textarea'>
		<?php 
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_array()) { 
							echo "<p style='color: #000;'>". $row['fullname']. "-" .$row['reference'] ."<br />";
							echo "</p>";
						}
					} else {
						echo "0 results";
					}
			?>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				
			</div>
		</div>
	</div>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
