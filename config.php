<?php
$hostname = "localhost";
$username = "root";
$password = "Miracle@2022";
$dbname = "person";
// $con = new mysqli("$hostname", "$username", "$password", "$dbname");
$con = mysqli_connect($hostname, $username, $password, $dbname);
?>