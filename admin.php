<?php
  $a=$_POST['uname'];
  $b=$_POST['pswd'];

$conn=mysqli_connect("localhost","root","","order");
if(isset($_POST['submita']))
{
$select="SELECT * FROM admin WHERE username='$a' AND password='$b'";
$res=mysqli_query($conn, $select);
$data=mysqli_fetch_array($res);
if($data)
{
  header("location:myadmin.php");
}
else
{
  echo "<script>
        alert('username or password is wrong!')
        </script>";
}
}
?>





<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	


</head>
<body>

<div class="bgimage" style="background-color:seashell;">

<div class="header">
<div class="container-fluid">
<div class="col-sm-12">
<div class="text-center">
<img src="cakes.png" height="5%" width="5%">  cakes
</div>
</div>
</div>
</div>

<nav class="navbar " style="background-color: seashell;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      
      <img src="vegan.png" height="50px" width="50px" style="padding:0px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="project.php" style="font-family:french script MT regular; background-color:mistyrose; color:grey; font-size:250%">cakes</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      


        <li><a href="aboutus.php" style="font-family:french script MT regular; color:palevioletred; font-size:250%">about us</a></li>
        <li><a href="contactus.php" style="font-family:french script MT regular; color:palevioletred; font-size:250%">speciality</a></li>
        <li><a href="variety.php" style="font-family:french script MT regular; color:palevioletred; font-size:250%">variety</a></li>
        <li><a href="recipe.php" style="font-family:french script MT regular; color:palevioletred; font-size:250%">recipe corner</a></li>
        <li><a href="registration.php" style="font-family:french script MT regular; color:palevioletred; font-size:250%">register</a></li>
      </ul>
      <div class="navbar-right">

       <a class="navbar-brand" href="admin.php" style="font-family:french script MT regular; background-color:mistyrose;
        color:rosybrown; font-size:250%;border:1px solid;border-radius: 12%">Admin</a> </div>
      

     
        <!--  <input type="text" class="form-control" placeholder="reservation login" style="font-family:french script MT regular; color:palevioletred; font-size:250%" >
        </div>
        <button type="submit" class="btn btn-default" style="font-family:french script MT regular; color:palevioletred; font-size:150%; padding-top:0px;">login</button>-->
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="bgimage">
<div class="text-center">
<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3" style="background-color:mistyrose;">
<div class="container-fluid" >
<p style="font-family: Edwardian Script ITC Regular;color:grey;font-size:350%;">Admin panel</p>
</div>
</div>
</div>

<br>
<br>




<div class="forms">
<div class="container">
<div class="col-sm-3-offset col-sm-6 col-sm-offset-3">
<div class="text-center">

              <form name="adminfm" method="POST">
             
               <div class="form">
               <h1>UserName: <input  placeholder="name" type="text" name="uname"></h1>
               </div>
               <br>
            
            
              <div class="form"> 
              <h1>Password: <input  placeholder="********" type="password" name="pswd"></h1>
              </div>
              <br>

               <div class="text-center">
             <div class="form">
             <input type="submit" class="btn btn-default" name="submita" style="font-family:french script MT regular; color:palevioletred; font-size:230%;padding:0px;">
             </div>
             </div>  

              </form>
</div>
</div>
</div>
</div>
<br>

 <?php
 include 'footer.php';
 ?>

</div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</body>
</html>

