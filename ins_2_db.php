<?php
$host= 'localhost';
global $con;
global $sql;
global $sql1;
$uname= 'root';
$pass= '';
$db= 'coop_society';
$con= mysqli_connect($host,$uname,$pass,$db);
if(!$con)
	echo 'Not Connected succesful';
$numb=$_POST['numb'];
$pcode=$_POST['pcode'];
$purpri=$_POST['purpri'];
$quantity=$_POST['quantity'];
$gst=$_POST['gst'];
$cstock=$_POST['cstock'];
$total=$_POST['total'];
$gstpri=$_POST['gstpri'];
$basepri=$_POST['basepri'];
$slno=$_POST['slno'];
$sql="INSERT INTO purchasedata(`Slno`,`PurchaseBillId`,`ProductCd`,`PurchaseQty`,`PurchasePrice`,`BasePrice`,`VatRate`,`VatAmount`,`Amount`)VALUES('$slno','$numb','$pcode','$quantity','$purpri','$basepri','$gst','$gstpri','$total')";
if(mysqli_query($con,$sql))
	{
		//$patid = mysqli_insert_id($con);
		  echo "New record created successfully. Last Purchase ID is: ".$slno;
		//echo "<p style='color>data inserted</p>";
	}else
	{
		echo "Error:".$sql."<br>". mysqli_error($con);
	}
/*$sql="INSERT INTO purchaseinfo(`PurchaseBillId`,`PurchaseBillDate`,`EntryDate`,`SupplierCd`,`PurchaseBillTotal`)VALUES('$numb','$sdate','$edate','$scode','$total')";
if(mysqli_query($con,$sql))
	{
		//$patid = mysqli_insert_id($con);
		  echo "New record created successfully. Last Purchase ID is: ".$slno;
		//echo "<p style='color>data inserted</p>";
	}else
	{
		echo "Error:".$sql."<br>". mysqli_error($con);
	}*/
$sql="UPDATE stock SET ClosingStock='$cstock' WHERE `ProductCd`='$pcode'";
	if(mysqli_query($con,$sql))
		{
			//$patid = mysqli_insert_id($con);
			  echo "New record created successfully. Last Purchase ID is: ";
			//echo "<p style='color>data inserted</p>";
		}else
		{
			echo "Error:".$sql."<br>". mysqli_error($con);
		}
?>

<script>
/*$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$scode=$_POST['scode'];*/
var nullifier;
nullifier=document.getElementById("pdm");
nullifier.reset();
</script>
