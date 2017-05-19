<?php
require "init.php";

$name= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$address= $_POST["address"];
$nic= $_POST["nic"];
$password= $_POST["password"];

$sql_query1="insert into login_details values(null,'$email','$password','3');";

$sql_query2="insert into car_renter values(LAST_INSERT_ID(),'$name','$address','$nic','$phone');";

if(mysqli_query($con,$sql_query1)){
echo "Success 1";
}
else{echo "Failed".mysqli_error($con);}


if(mysqli_query($con,$sql_query2)){
echo "Success 2";
}
else{echo "Failed".mysqli_error($con);}

?>