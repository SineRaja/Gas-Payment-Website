<?php


include "dbconfigure.php";


$id=$_GET['id'];


$query = "delete from bill where billid='$id'";
$n = my_iud($query);
//echo "$n record removed";  
header("Location:viewbill.php");
?>