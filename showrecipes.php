<!DOCTYPE html>
<html>
<head>
	<style>
		
table
{
	border-color:rosybrown;
	padding-right:30px;

}

 th
{

	font-family:Edwardian Script ITC Regular;
	font-size:300%;
	color:grey;
	background-color:mistyrose;
	padding:40px;

}
td
{
	font-size:300%;
	padding:100px;
	font-family:french Script MT Regular;
	background-color:mistyrose;
	color:grey;
}




	</style>
</head>
<body>

</body>
</html>

<?php
include 'header.php';
?>


<?php
$conn=mysqli_connect("localhost","root","","order");
$select="SELECT * FROM recipes";
$res=mysqli_query($conn,$select);
if($res)
{
	echo "<center><table cellpadding=10px><tr >
	<th>ID</th>
	<th >Recipes</th>
	</tr>";
	while($data=mysqli_fetch_array($res))
	{
		echo 
		"<tr>
		<td>$data[0]</td>
		<td>$data[1]</td>
		</tr>";
		
	}
	echo "</table></center>";
}
else
{
	echo "Query not working";
}
?>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>
