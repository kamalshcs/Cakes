<!DOCTYPE html>
<html>
<head>
	<style>
		
table
{
	border-color:brown;
	margin-right:100px;
}
th,td{
	padding:20px;
}

 th
{
    
	font-family:Edwardian Script ITC Regular;
	font-size:300%;
	color:#989898;
	background-color:mistyrose;
	padding:40px;
   font-weight:none;
}
td
{
	font-size:300%;
	padding:100px;
	font-family:french Script MT Regular;
	background-color:mistyrose;
	color:grey;
}
.padding{
	padding-right: 20px;
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
	echo "<center>
	<table border='2px'>
	<tr>
	<th cellpadding='2px'>Id</th>
	<th>Recipes</th>
	</tr>";
	while($data=mysqli_fetch_array($res))
	{
		echo 
		"<tr>
		<td width='100px'>$data[0]</td>
		<td width='200px'>$data[1]</td>
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
