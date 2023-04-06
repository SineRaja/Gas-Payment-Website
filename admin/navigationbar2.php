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
<!--nav start-->
<nav class="navbar navbar-expand-md" style = "background-color :#FB7922">
  <a class="navbar-brand" href="#" style = "color : #570061 ; font-weight : bold">Electricity Billing System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin_home.php" style = "color : white;font-weight : bold">Home</a>
      </li>
      
    
	  
	  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  style = "color : white;font-weight : bold">
        Customer
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="addcustomer.php" style = "font-weight : bold">Add Customer</a>
        <a class="dropdown-item" href="viewcustomer.php" style = "font-weight : bold">View Customer</a>
      </div>
    </li>
	
	
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style = "color : white;font-weight : bold">
       Connection
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="addconnection.php" style = "font-weight : bold">Add Connection</a>
        <a class="dropdown-item" href="viewconnection.php" style = "font-weight : bold">View Connection</a>
      </div>
    </li>  
	  
	  
	  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style = "color : white;font-weight : bold">
        Bill
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="addbill.php" style = "font-weight : bold">Add Bill</a>
        <a class="dropdown-item" href="viewbill.php" style = "font-weight : bold">View Bill</a>
      </div>
    </li>
	  
	  
<li class="nav-item">
        <a class="nav-link" href="signout.php" style = "color : white;font-weight : bold">Logout</a>
      </li>   	  
    </ul>
  </div>  
</nav>
<!-- navigation end-->
</body>
</html>