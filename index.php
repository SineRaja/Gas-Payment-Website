<?php
/*
on anonymous page, any one can visit
strangers(anonymous) are also allowed
*/

@session_start();
include "dbconfigure.php";
$msg="";
if(verifyuser())
{
$un=fetchusername();
$msg="Welcome $un , <br /><a href='signout.php'>Signout</a>";
}
else
{
$msg="Welcome Guest ,";
$msg.="<br/>Existing user <a href='signin.php'>Signin</a>";
$msg.="<br/>New user <a href='signup.php'>Signup</a>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "header.php"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "navigationbar1.php"; ?>




    
        
        
       <div class="container" style = "margin-top : 100px">
	   <div class=row>
	   
	   <div class=col-sm-3>

</div>     
<div class=col-sm-6>
			<form method='post' action = viewmybill.php>
                            
				
							<!--<center><h1 style = "font-family : 'Monotype Corsiva' ; color : purple ;"><b>Admin Login</b></h1></center>-->
						<div class="form-group">
							<label>Enter 10 Digit Consumer Number</label>
					
            <input type="text"   class="form-control" placeholder="10 Digit Consumer Number" name="consumerid">
					
						
</div>
							
							
							
							
							
					
<div class="form-group">
<input type="submit" class="btn btn-danger form-control" name="login"  value="Submit">
</div>




			</form>
			</div>
				   <div class=col-sm-3>
				   

</div> 


</div>

</div> 
<?php include "footer.php"; ?>

    </body>
</html>



<?php
if(isset($_REQUEST['login']))
{
$username=$_REQUEST['username'];
$pwd=$_REQUEST['pwd'];
//syntax to fetch value of checkbox
if(isset($_REQUEST['rem']))
$remember='yes';
else
$remember='no';
//echo "<br/>$username,$pwd,$remember";

//1. check if user is valid or not
$query="select count(*) from admin where adminname='$username' and password='$pwd'";
include_once "dbconfigure.php";
$ans=my_one($query);
if($ans==1)
{
//2. save username and pwd to session variables
$_SESSION['sun']=$username;
$_SESSION['spwd']=$pwd;

//3. if remember is yes, save them to cookies too
if($remember=='yes')
{
setcookie('cun',$username,time()+60*60*24*7);
setcookie('cpwd',$pwd,time()+60*60*24*7);
}



header("Location:admin_home.php");

}
else
{
header("Location:loginerror.php");
}


}

if(isset($_REQUEST['signup']))
{
header("Location:signup.php");
}
?>
		

