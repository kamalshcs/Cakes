
<?php
include 'header.php';
?>

<?php
$conn=mysqli_connect("localhost","root","","order");
$select="SELECT * FROM placeorder";
$res=mysqli_query($conn,$select);
if($res)
{
	echo "<center><table border=1px>
	<tr >
	<th>ID</th>
	<th >Name</th>
	<th>Email</th>
	<th>Occasion</th>
	<th>Order for</th>
    <th>address</th>
	<th>Date</th>
	<th>Time</th>
	<th>Comments</th>
	<th>Delete</th>
	</tr>";
	while($data=mysqli_fetch_array($res))
	{
		echo 
		"<tr>
		<td>$data[0]</td>
		<td>$data[1]</td>
		<td>$data[2]</td>
		<td>$data[3]</td>
		<td>$data[4]</td>
		<td>$data[5]</td>
		<td>$data[6]</td>
		<td>$data[7]</td>
		<td>$data[8]</td>




		<td><a href='delete.php?id=$data[0]'>delete</a></td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
include 'footer.php';
?>
</body>
</html>