<?php $page = 'home'; include_once('header.php'); include_once('config.php'); include_once('functions.php');
date_default_timezone_set('America/New_York');
?>
<html>
<head>
<title>ICS PROJECT</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
<div class="jumbotron"><h1>Registration Page</h1></div>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<?php

if(isset($_POST['submit'])){

//GET POST VARIABLES
$firstName=$_POST['firstName'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

//THE ENCRYPTION PROCESS
// $nameencrypted=encryptthis($firstName, $key);
// $emailencrypted=encryptthis($email, $key);

// //THE DECRYPTION PROCESS
// $namedecrypted=decryptthis($nameencrypted, $key);
// $emaildecrypted=decryptthis($emailencrypted, $key);

//DISPLAY RESULTS
// echo '<h2>Original Data</h2>';
echo '<p>Name: '.$firstName.'</p>';
echo '<p>Email: '.$email.'</p>';
// echo '<h2>Encrypted Data</h2>';
// echo '<p>Name Encrypted: </p><p style="background-color:yellow">'.$nameencrypted.'</p>';
// echo '<p>Email Encrypted: </p><p style="background-color:yellow; word-break: break-all;">'.$emailencrypted.'</p>';
// echo '<h2>Decrypted Data</h2>';
// echo '<p>Name Decrypted: '.$namedecrypted.'</p>';
// echo '<p>Email Decrypted: '.$emaildecrypted.'</p>';


// $result = $con->mysqli_query("SELECT * FROM details");
// mysqli_query($con, "INSERT INTO details(`name`, `email`, `phone`, `address`) values('$nameencrypted','$emailencrypted', '$phone', '$address')");
mysqli_query($con, "INSERT INTO details(`name`, `email`, `phone`, `address`) values('$firstName','$email', '$phone', '$address')");

}
//SEPERATOR
echo '<div class="well"><h2>Register here!</h2>';
//FORM FOR OUR EXAMPLE
echo '<form method="post">
<div class="form-group">
<label for="firstName">Enter Name: </label>
<input type="text" class="form-conrtol" name="firstName" placeholder="UserName" style="margin-left: 15px;">
</div>
<div class="form-group">
<label for="email">Enter Email: </label>
<input type="email" class="form-conrtol" name="email" placeholder="Email" style="margin-left: 15px;">
</div>
<div class="form-group">
<label for="phone">Enter Phone number:  </label>
<input type="text" class="form-conrtol" name="phone" placeholder="Phone No" style="margin-left: 15px;">
</div>
<div class="form-group">
<label for="address">Enter Address: </label>
<input type="text" class="form-conrtol" name="address" placeholder="Address" style="margin-left: 15px;">
</div>
<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
</form>';
?>
</div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>