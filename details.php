<?php $page = 'details'; include_once('header.php');
// include_once('example.php');
include_once('functions.php');
include_once('config.php');
?>

<?php
echo '<h2>Account Details</h2>';
$sql = "SELECT * FROM details";
$result = mysqli_query($con, $sql);
$ct = 1;    
    while ($row = $result->fetch_assoc()) {
        echo $ct;
        // echo '<p>Name: '.decryptthis($row['name'], $key).'</p>';
        // echo '<p>Email: '.decryptthis($row['email'], $key).'</p>';
        echo '<p>Name: '.$row['name'].'</p>';
        echo '<p>Email: '.$row['email'].'</p>';
        echo '<p>Phone No: '.$row['phone'].'</p>';
        echo '<p>Address: '.$row['address'].'</p>';
        $ct++;
}
?>