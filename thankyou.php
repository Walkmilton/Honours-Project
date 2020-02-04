<?php
session_start();
header( "refresh:10;url=index.php" );


session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tell us more</title>
    <meta name="description" content="Tell us more">
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

           <div class="row" id="title">
            <div class="col">
                <h1>Thank you!</h1>
            </div>
        </div>
        
           <div class="row" id="title">
            <div class="col">
                <p id="thankYou">Thank you for your submission. This project would not be possible without your input. Redirecting you to the homepage...</p>
            </div>
        </div>
        
        
        
    </div>
    </body>