<?php
session_start();
$server = "localhost";
$uname = "root";
$pw = "";
$db ="coop society";
$con = mysqli_connect($server,$uname,$pw,$db);
if (!$con) 
{
	echo "Connection not successful";
}

$pc=$_POST['pcode'];
mysqli_query($con,$forkey1);

$sql="DELETE FROM `stock` WHERE `ProductCd`='$pc'";
$forkey2='SET foreign_key_checks=1';

if (mysqli_query($con, $sql)) {

header('Location: delstock.php');
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_query($con,$forkey2);
?>