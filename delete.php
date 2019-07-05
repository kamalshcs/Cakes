<?php
$conn=mysqli_connect("localhost","root","","order");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$delete="DELETE FROM placeorder WHERE id='$id'";
	mysqli_query($conn,$delete);
	header("location:myadmin.php");
}	
?>