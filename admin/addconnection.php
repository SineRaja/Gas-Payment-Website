<html>
<head>
<?php

include "dbconfigure.php" ;
?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" media="all" />
<script src = js1/bootstrap.min.js></script>
<script src = js1/jquery-3.2.1.min.js></script>
<style>
label{font-weight : bold}
</style>
</head>
<body>

<?php include "navigationbar2.php"; ?>


				<div class="container" style = "margin-top : 30px">
				
  <h2 class = text-center>Add New Connection</h2>

<form method="post">

<label>10 Digit - Connection ID</label>
<input type="text" name="connectionid" class="form-control" maxlength=10>

<div class="form-group">
<label >Customer Name</label>
<select class="form-control" name="customerid">
<?php
$sql = "SELECT customerid,customername from customer";
$rs = my_select($sql);
//$row = mysqli_num_rows($rs);
while ($row = mysqli_fetch_array($rs)){
$customername = $row['customername'];
$customerid = $row['customerid'];
echo "<option value='". $row['customerid'] ."'>" .$row['customername'] . " , " .$row['customerid'] ."</option>" ;
}
?>
</select>







<label>Connection Type</label>
<select name = connectiontype>
<option value = "Residential">Residential</option>
<option value = "Commercial">Commercial</option>
</select>

<br>
<label>Connection Start Date</label>
<input type="date" name="connectionstartdate" class="form-control">

<label>Occupation</label>
<input type="text" name="occupation" class="form-control">

<label>Load</label>
<input type="text" name="connectionload" class="form-control">

<label>Plot No.</label>
<input type="text" name="plotno" class="form-control">

<label>City</label>
<input type="text" name="city" class="form-control">

<label>Pincode</label>
<input type="text" name="pincode" class="form-control">

<label>Address</label>
<textarea name="address" class="form-control"></textarea>

<label>State</label>
<input type="text" name="state" class="form-control">

<label>Description</label>
<textarea name="description" class="form-control"></textarea>

<input type="submit" class="btn btn-primary" name="save"  value="Submit"/>


</form>
</div>

<?php


if(isset($_POST["save"]))
{
$connectionid=$_POST['connectionid'];
$customerid=$_POST['customerid'];
$connectiontype=$_POST['connectiontype'];
$connectionstartdate=$_POST['connectionstartdate'];
$occupation=$_POST['occupation'];
$connectionload=$_POST['connectionload'];
$plotno=$_POST['plotno'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$address=$_POST['address'];
$state=$_POST['state'];
$description=$_POST['description'];


$query="insert into connection(connectionid,customerid,connectiontype,connectionstartdate,occupation,connectionload,plotno,city,pincode,address,state,description) values('$connectionid','$customerid','$connectiontype','$connectionstartdate','$occupation','$connectionload','$plotno','$city','$pincode','$address','$state','$description')";
$n = my_iud($query);
if($n==1)
{
echo "<script>alert('Record Saved Successfully');
window.location = 'viewconnection.php';
</script>";
}
else
{
echo "<script>alert('Something Went Wrong , Try Again');</script>";
}
}


?>





	
			</body>
</html>


</div>

</body>
</html>