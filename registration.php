<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html>h
<head>
  <title></title>
</head>
<body>
<div class="bgimage">
<div class="forms">
<div class="container">
<div class="col-sm-2-offset col-sm-8 col-sm-offset-2">
<div class="text-center">
<p>Order Up!</p>
</div>
              <form method="POST">
             
               <div class="form">
               <h1>Name: <input name="name"  placeholder="name" type="text"></h1>
               </div>
               <br>
            
            
              <div class="form"> 
              <h1>Email: <input name="email"  placeholder="email" type="email"></h1>
              </div>
              <br>
              
              <div class="form">
              <h1>Occasion: <select name="occasion" placeholder="select an occasion">
                
                <h2><option value="wedding_ceremony" style="color:grey;">wedding ceremony</option>
                <option value="birthday" style="color:grey;">birthday</option>
                <option value="party" style="color:grey;">party</option></h2>
              </select>
              
              </div>
            <br>
 
                 <div class="form">
              <h1>Order For: <select name="ofor" placeholder="place order">
                
                <h2><option value="wedding_cake" style="color:grey;">wedding cakes</option>
                <option value="cupcakes" style="color:grey;">cupcakes</option>
                <option value="birthday_cakes" style="color:grey;">birthday cakes</option>
                <option value="macarons" style="color:grey;">macarons</option>
                <option value="doughnut" style="color:grey;">doughnuts</option>
                </h2>
              </select>
              
              </div>
            <br>

             <div class="form">
            <h1>Address: <input name="addr" placeholder="address" type="text"></h1>
            </div>
            <br>
                        
            <div class="form">
            <h1>Date: <input name="date" placeholder="date" type="date"></h1>
            </div>
            <br>

             <div class="form">
            <h1>Time: <input name="time" placeholder="time" type="time"></h1>
            </div>
            <br>
             
             <div class="form">
             <h1>Feel Free To Share Your Ideas...
             <br>
            <textarea name="message" cols="30" rows="5" placeholder="your comments!"></textarea></h1>
                </div>
                <br>


             <div class="text-center">
             <div class="form">
             <input type="submit" class="btn btn-default" name="submit1" value="Order" style="font-family:french script MT regular; color:palevioletred; font-size:230%;padding:0px 9px 0px 9px;">
             </div>         
             </div>  
             <br>
             <br> 

                </form>
                </div>
                </div>
                </div>
                </div>

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

<?php
include 'connection.php';
if(isset($_POST['submit1']))
{
  $a=$_POST['name'];
  $b=$_POST['email'];
  $c=$_POST['occasion'];
  $d=$_POST['ofor'];
  $e=$_POST['addr'];
  $f=$_POST['date'];
  $g=$_POST['time'];
  $h=$_POST['message'];

  $insert="INSERT INTO placeorder VALUES(null,'$a','$b','$c','$d','$e','$f','$g','$h')";
  $res=mysqli_query($conn,$insert);
  if($res)
  {
    echo "<script>alert('Thanks for Ordering with us!')</script>";
  }

  
  else
  {
    echo "<script>alert('insertion unsuccessful!')</script>";
  }

}
?>