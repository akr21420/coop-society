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
if(isset($_POST['username']))
$_SESSION['username'] = $_POST['username'];
if(isset($_POST['password']))
$_SESSION['password'] = $_POST['password'];
$name = $_SESSION['username'];
$pass = $_SESSION['password'];
$quer = "SELECT * from `userdata` WHERE `UserName` = '$name' AND `Password` = '$pass'";
if(mysqli_query($con,$quer)){
	echo "Logged In";
	header('Location: first2.php');
}
else {
    echo "Error: " . $quer . "<br>" . mysqli_error($con);
}

?>