<?php
session_start();



    $servername = "localhost";
    $usernameDB = "debian-sys-maint";
    $passwordDB = "eQjGVhoh45rtUwom";
    $dbname = "honours";


$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>How do you feel about Computer Security?</title>
	<meta name="description" content="How do you feel about Computer Security?">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
	<div id="background">


		<!--Heading-->
		<div class="row" id="title">
			<div class="col">
				<h1>How do you feel about computer security?</h1>
			</div>
		</div>


		<form action="Questions.php" method="post">
			<div class="row">
				<div class="col"></div>
				<div class="col">
					<p><button name="happyButton" value="Happy" type="submit">🙂</button></p>
				</div>
				<div class="col"></div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col">
					<p><button name="mediumButton" value="Medium" type="submit">😐</button></p>
				</div>
				<div class="col"></div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col">
					<p><button name="sadButton" value="Sad" type="submit">🙁</button></p>
				</div>
				<div class="col"></div>
			</div>
		</form>


		<div class="row" id="infoButton">
	<div class="col"></div>		
		<div class="col">
			<button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#infoModal">More Info</button>
			</div>
			<div class="col"></div>
		</div>
		
		
			<div class="toast" data-autohide="false">
  <div class="toast-header">
		 <strong class="mr-auto text-primary">Note:</strong>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
  </div>
  <div class="toast-body">
    Please don't enter any personal information!
  </div>
</div>

	</div>

	<!-- The Modal -->
<div class="modal" id="infoModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">More Info</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Thank you for visiting my Honours Project website. 
				<br> <br>
				The aim of this project is to find out how people feel about computer security, what their emotions are towards it, and how it affects them. <br> <br>
				
				The data gathered will be used to aid cybersecurity research, affective positive change within the industry. Please don't put any personal data! <br> <br>
				
				If you have any questions on how this data will be used, or want more information on the project, please feel free to email me at 1600219@abertay.ac.uk <br> <br>
				
				Again, thank you!
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	

	
		<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>

</body>

</html>
