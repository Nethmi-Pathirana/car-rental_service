<?php
require "init.php";

$brand=$_POST["brand"];
$type=$_POST["type"];
$condition=$_POST["condition"];
$pick_up=$_POST["pick"];

//$sql_query="select * from car_details where availableFrom <= 'pick_up' and (brand,type,car_condition)=('$brand','$type','$condition');";

$sql_query="select * from car_details where (brand,type,car_condition)=('$brand','$type','$condition');";
$result=mysqli_query($con, $sql_query);


while($row=mysqli_fetch_array($result)){
$response[] =$row;
}

echo json_encode($response);

?>