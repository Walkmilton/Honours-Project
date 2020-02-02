<?php
session_start();

if(!isset($_SESSION['submitted'])){
    echo 'test';
    echo "<script>$('#thankYou').modal('show');</script>";
    session_unset(); 
}



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
	<title>Honours Project</title>
	<meta name="description" content="Honours Project">
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
		
        
        <div class="modal" id="thankYou">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thank You!</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Thank you for submitting a responce. Your input makes this project possible.
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>


	</div>

</body>

</html>
