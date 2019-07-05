<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>index</title>
</head>
<body>
<div class="text-center">
<p style="font-family: Edwardian Script ITC Regular;font-size: 390%;color:grey;background-color: mistyrose;">
Share Your Recipes...</p>
</div>
<br>

<div class="container">
<div class="text-center">
<p style="font-family: french Script MT Regular;font-size: 280%;color:rosybrown;">
Share your ideas with us,and make your recipes a part of our menu!<br>
Let out the Baker in you.<br>
Also win a chance to pick your favourite item for free on Sundays!</p>
</div>
</div>
<br>
<br>


<div class="recipeform" >
<div class="row">
<div class="container">
<div class="col-sm-7" style="background-image:url(pink.jpg);">
<form name="rf" method="POST">
<h1> <img src="culinary.png" height='110px' width='110px'>Share your recipes here...
</h1>
 <p><input type="text" name="name" placeholder="your name...">
 <p><textarea name="comment" cols="47" rows="6" placeholder="your recipe!"></textarea></p>
 
 
 <div class="text-center">
  <input type="submit" class="btn btn-default" name="submitr" style="font-family:french script MT regular; color:palevioletred; font-size:220%; padding:1px;">

  </div>
<br>
 </form>
 </div>

 


<div class="container">
<div class="col-sm-5">
<img src="macarons6.png">
</div>
</div>
</div>
</div>
<br>
<br>

<div class="text-center">
<p style=" font-size:300%;font-family:Edwardian Script ITC Regular; padding:0px;" ><a style="text-decoration:none;color:palevioletred;" href="showrecipes1.php">Show recipes...</a></p>
</div>  

<br>
<br>

<?php
include 'footer.php';
?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","order");
if(isset($_POST['submitr']))
{
  $b=$_POST['name'];
  $a=$_POST['comment'];
 
  $insert="INSERT INTO recipes VALUES(null,'$b','$a')";
  $res=mysqli_query($conn,$insert);
  if($res)
  {
    echo "<script>alert('Thanks,for sharing your recipe with us!Check your recipe by clicking on the button below.')</script>";
  }
  else
  {
    echo 'insertion unsuccessful!';
  }
}
?>