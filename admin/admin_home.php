<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

</head>
<body>
<?php include "navigationbar2.php" ?>
<div>
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{

	$un=fetchusername();
	$status = "logout";
$msg='Welcome $un , <br /><a href="index.php?a='.$status.'">Signout</a>';
/*echo '<td><a href="familyViewAdmin2.php?id='.$column['clientid'].'&gname='.$column['groupname'].'">*/
		
}
else
{
header("Location:loginerror.php");
}
?>



<div class = container style = "margin-top: 100px ; font-weight : bold">
     <div class = row>
         <div class="col-sm-4 text-center" style="background-color : #F7D48C ; height : 100px ; font-size : 20pt ; font-family: cursive">
             <h2>Total Customers</h2>
			
             <p style = "color : purple"> <?php echo totalcustomers() ?><p>
         </div>
         <div class="col-sm-4 text-center" style="background-color : #F8AB46 ; height : 100px ; font-size : 20pt ; font-family: cursive">
             <h2>Total Connection</h2>
			 
             <p style = "color : purple"> <?php echo totalconnections() ?><p>
         </div>
         <div class="col-sm-4 text-center" style="background-color : #F7D48C ; height : 100px ; font-size : 20pt ; font-family: cursive">
            <h2>Total Bills</h2> 
			
             <p style = "color : purple"> <?php echo totalbills() ?><p>
         </div>
		 
     </div>  
 </div>
<br>
<br>
<br>
<br>

<?php include "footer.php"; ?>
</body>
<html>

