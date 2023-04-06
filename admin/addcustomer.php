<?php 
ob_start();
?>

<html>
<head>
<?php
session_start();
$un = $_SESSION['sun'];
include "navigationbar2.php";

?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel=stylesheet type = text/css href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>




				<div class="container">
  <h2 class=text-center>Register Customer</h2>



<form method="post" enctype = "multipart/form-data">
<div class="form-group">
<label >Customer Name</label>
<input type="text" name="customername"  class="form-control" >



<label>Contact</label>
<input type="text" name = "contact" class="form-control" >



<label>Email ID</label>
<input type="text" name="email"  class="form-control" > 
 
<label>Password</label>
<input type="password" name="password" class="form-control" > 

<label>Address</label>
<textarea name="address" class="form-control" ></textarea> 

<label>City</label>
<input type="text" name="city"  class="form-control" > 

<label>State</label>
<input type="text" name="state"  class="form-control" > 

<input type="submit" class="btn btn-primary" name="save"  value="Save"/>
</div>
</form>



</div>

<?php

include "dbconfigure.php" ;
if(isset($_POST["save"]))
{

$customername=$_POST['customername'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];

$state=$_POST['state'];



$query="insert into customer(customername,contact,email,password,address,city,state) values('$customername','$contact','$email','$password','$address','$city','$state')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location = "viewcustomer.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong");</script>';
}
}

?>

<?php  //include "bottom.php "?>
</body>
</html>