<?php
require "init.php";

$name= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$address= $_POST["address"];
$nic= $_POST["nic"];
$password= $_POST["password"];
$passengers= $_POST["passengers"];
$price= $_POST["price"];
$brand= $_POST["brand"];
$type= $_POST["type"];
$condition= $_POST["condition"];

$sql_query1="insert into login_details values(null,'$email','$password','2');";

$sql_query2="insert into owner_req values(LAST_INSERT_ID(),'$brand','$type','$condition',null,null,null,'$price','$passengers','$name','$address','$NIC','$phone',null,'0');";

if(mysqli_query($con,$sql_query1)){
echo "Success 1";
}
else{echo "Failed".mysqli_error($con);}


if(mysqli_query($con,$sql_query2)){
echo "Success 2";
}
else{echo "Failed".mysqli_error($con);}

?>