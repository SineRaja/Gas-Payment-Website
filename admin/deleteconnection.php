<?php


include "dbconfigure.php";
@session_start();
$u = $_SESSION['sun'];

$id=$_GET['id'];


$query = "delete from connection where connectionid='$id'";
$n = my_iud($query);
//echo "$n record removed";  
header("Location:viewconnection.php");
?>