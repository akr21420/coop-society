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

$pccode=$_POST["pcode"];
$query="SELECT * from `productdata` WHERE `ProductCd`= '$pccode'";
$demo=mysqli_query($con,$query);
while($row=@mysqli_fetch_array($demo)) {


   echo $pdesc=$row['ProductName'];
}
   /*if(!mysqli_query($con,$query))
   die('query not executed'.@mysqli_error());
*/
?>