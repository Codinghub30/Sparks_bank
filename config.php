<?php 

$server="localhost";
$username="root";
$password="";
$database="bank";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
