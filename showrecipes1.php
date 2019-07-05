<!DOCTYPE html>
<html>
<head>
	<style>
		
table
{
	border-color:grey;
	
}

 th
{
	text-align: center;
    
	font-family:Edwardian Script ITC Regular;
	font-size:270%;
	color:rosybrown;
	background-color:antiquewhite;
	
   
}
td
{
	font-size:240%;

	font-family:french Script MT Regular;
	background-color:antiquewhite;
	color:grey;
}




	</style>
</head>
<body>


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
	<table border='2px'border-color='grey' width=900>
	<tr align='center'>
	<th align='center' width=70 height=80px>S.no</th>
	<th width=150>Name</th>
	<th>Recipes</th>
	</tr>";
	while($data=mysqli_fetch_array($res))
	{
		$a=htmlentities($data[1]);
     	$b=htmlentities($data[2]);
		echo 
		"<tr >
		<td height=70px>$data[0]</td>
		<td>$a</td>
		<td>$b</td>
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
</div>
</body>
</html>