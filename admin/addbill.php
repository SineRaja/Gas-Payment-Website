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
<script>
function calc()
    {
        
     var totalunits1 = document.getElementById("totalunits").value;
     
     var chargeperunit1 = document.getElementById("chargeperunit").value;
     var totalamount = parseInt(totalunits1)*parseInt(chargeperunit1);
     
     document.getElementById("finalamount").value = totalamount;
    }


    function calunits()
    {
        
     var currentreading1 = document.getElementById("currentreading").value;
     
     var previousreading1 = document.getElementById("previousreading").value;
     var totalunits = parseInt(currentreading1)-parseInt(previousreading1);
     
     document.getElementById("totalunits").value = totalunits;
    }
</script>
</head>
<body>

<?php include "navigationbar2.php"; ?>


				<div class="container" style = "margin-top : 30px">
				
  <h2 class = text-center>Add New Bill</h2>

<form method="post">

<label>Consumer ID</label>
<select class="form-control" name = connectionid>
<?php
$sql = "SELECT connectionid from connection";
$rs = my_select($sql);
//$row = mysqli_num_rows($rs);
while ($row = mysqli_fetch_array($rs)){
$customername = $row['customername'];
$customerid = $row['customerid'];
echo "<option value='". $row['connectionid'] ."'>" .$row['connectionid'] ."</option>" ;
}
?>
</select>


<label>Bill For Month</label>
<input type="text" name="billformonth" class="form-control" >

<div class="form-group">
<label >Current Reading</label>
<input type="text" name="currentreading" id = currentreading class="form-control">


<label>Previous Reading</label>
<input type="text" name="previousreading" id = previousreading class="form-control" onkeyup="calunits()">



<label>Total Units</label>
<input type="text" name="totalunits" id = "totalunits" class="form-control">


<label>Charge Per Unit</label>
<input type="text" name="chargeperunit" id = "chargeperunit" class="form-control" onkeyup="calc()">

<label>Final Amount</label>
<input type="text" name="finalamount" id = "finalamount" class="form-control">

<label>Due Date</label>
<input type="date" name="duedate" class="form-control">



<input type="submit" class="btn btn-primary" name="save"  value="Submit"/>


</form>
</div>

<?php


if(isset($_POST["save"]))
{
$connectionid=$_POST['connectionid'];
$billformonth=$_POST['billformonth'];
$currentreading=$_POST['currentreading'];
$previousreading=$_POST['previousreading'];
$totalunits=$_POST['totalunits'];
$chargeperunit=$_POST['chargeperunit'];
$finalamount=$_POST['finalamount'];
$duedate=$_POST['duedate'];
$status = "not paid";



$query="insert into bill(connectionid,billformonth,currentreading,previousreading,totalunits,chargeperunit,finalamount,duedate,status) values('$connectionid','$billformonth','$currentreading','$previousreading','$totalunits','$chargeperunit','$finalamount','$duedate','$status')";
$n = my_iud($query);
if($n==1)
{
echo "<script>alert('Record Saved Successfully');
window.location = 'viewbill.php';
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