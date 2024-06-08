<?php 

$server="localhost";
$username="root";
$password="admin";
$db="MYSQLCONNSTR_localdb";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
