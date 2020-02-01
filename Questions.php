<?php

		$servername = "localhost";
    $usernameDB = "debian-sys-maint";
    $passwordDB = "eQjGVhoh45rtUwom";
    $dbname = "honours";


$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

if (isset($_POST['happyButton'])) {
    $feeling = "happy";
} else if (isset($_POST['mediumButton'])) {
   $feeling = "medium";
} else if (isset($_POST['sadButton'])) {
		$feeling = "sad";
} else {
    //no button pressed
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

		<form action="index.html">
			<div class="form-group">
				<div class="row">
					<div class="col"></div>
					<div class="col">
						<p id="text">Why did you feel this way?</p>
					</div>
					<div class="col"></div>
				</div>

				<div class="row">
					<div class="col"></div>
					<div class="col">
						<textarea class="form-control" rows="4" id="feel"></textarea>
					</div>
					<div class="col"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col"></div>
					<div class="col">
						<p id="text">Tell us more</p>
					</div>
					<div class="col"></div>
				</div>

				<div class="row">
					<div class="col"></div>
					<div class="col">
						<textarea class="form-control" rows="4" id="more"></textarea>
					</div>
					<div class="col"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col"></div>
					<div class="col">
						<p id="text">What would you change?</p>
					</div>
					<div class="col"></div>
				</div>

				<div class="row">
					<div class="col"></div>
					<div class="col">
						<textarea class="form-control" rows="4" id="change"></textarea>
					</div>
					<div class="col"></div>
				</div>
			</div>

			<div class="row" id="bottomButton">
				<div class="col"></div>
				<div class="col">
					<button type="submit" class="btn btn-success btn-block">Enter</button>
				</div>
				<div class="col"></div>
			</div>

		</form>

	</div>
</body>
