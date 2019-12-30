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

$os=$_POST['ostock'];
$cs=$_POST['cstock'];
$pur=$_POST['purchase'];
$purprice=$_POST['cp'];
$sellprice=$_POST['sp'];
$gstr=$_POST['gst'];
$puni=$_POST['p-unit'];
$sunit=$_POST['s-unit'];
$forkey1='SET foreign_key_checks=0';
mysqli_query($con,$forkey1);
$ver="SELECT `ProductCd` from `productdata` WHERE `ProductCd`='$pc'";
$sql="UPDATE `stock` SET `OpeningStock`=" . $os . ", `TotalPurchase`=" . $pur . ", `PurchaseReturns`=0, `ClosingStock`=" . $cs . ", `PurchaseUnit`=' . $puni . ', `SellingUnit`=' . $sunit . ', `PurchasePrice`=" . $purprice . ", `SellingPrice`=" . $sellprice . ", `VATRate`=" . $gstr . " WHERE `ProductCd` =" .$pc. "" ;
$forkey2='SET foreign_key_checks=1';
if(mysqli_query($con,$ver)) {
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
else
{
    echo "Error";
}
mysqli_query($con,$forkey2);
header('Location: first2.php');


?>