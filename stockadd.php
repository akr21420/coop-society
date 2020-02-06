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

$sql="INSERT INTO `stock` SET `ProductCd` =" .$pc. ", `OpeningStock`=" . $os . ", `TotalPurchase`=" . $pur . ", `PurchaseReturns`=0, `ClosingStock`=" . $cs . ", `PurchaseUnit`=' . $puni . ', `SellingUnit`=' . $sunit . ', `PurchasePrice`=" . $purprice . ", `SellingPrice`=" . $sellprice . ", `VATRate`=" . $gstr . "" ;
$forkey2='SET foreign_key_checks=1';

if (mysqli_query($con, $sql)) {

header('Location: addstock.php');
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_query($con,$forkey2);
?>