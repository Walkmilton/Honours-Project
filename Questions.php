<?php
session_start();

$_SESSION['feeling'];



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


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
    $_SESSION['feeling'] = $feeling;
} else if (isset($_POST['mediumButton'])) {
   $feeling = "medium";
    $_SESSION['feeling'] = $feeling;
} else if (isset($_POST['sadButton'])) {
		$feeling = "sad";
    $_SESSION['feeling'] = $feeling;
} else {
    //no button pressed
}


$stmt = $conn->prepare("INSERT INTO opinions (Face, Why, More, Opinion) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $feeling, $explanation, $comment, $opinion);

$feeling = $_SESSION['feeling'];
$explanation = test_input($_POST['feelText']);
$comment = test_input($_POST['moreText']);
$opinion = test_input($_POST['changeText']);


 if(isset($_POST['submit'])) {
     //$sqlAdd = "INSERT INTO 'opinions'('Face', 'Why', 'More', 'Opinion') VALUES ('$feeling','$explanation','$comment','$opinion')";
     
     $stmt->execute();     
     $stmt->close();
     header("Location:thankyou.php");
     
//     if ($conn->query($sqlAdd) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
     
 }



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

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
                        <textarea class="form-control" rows="4" name="feelText"></textarea>
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
                        <textarea class="form-control" rows="4" name="moreText"></textarea>
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
                        <textarea class="form-control" rows="4" name="changeText"></textarea>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

            <div class="row" id="bottomButton">
                <div class="col"></div>
                <div class="col">
                    <button type="submit" class="btn btn-success btn-block" name="submit">Enter</button>
                </div>
                <div class="col"></div>
            </div>

        </form>

    </div>
</body>
