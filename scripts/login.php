<?php
require "init.php";

$user_mail=$_POST["login_email"];
$user_pass=$_POST["login_password"];

$sql_query="select * from login_details where email like '$user_mail' and password like '$user_pass';";

$result=mysqli_query($con, $sql_query);

//if(mysqli_num_rows($result)>0){
//$access_level=$row["access_level"];
//echo "Login Success....welcome".$access_level;
//}

//else{
//echo "Login failed...";
//}


//$response=array();

while($row=mysqli_fetch_array($result)){
$response=array("email"=>$row[1],"access_level"=>$row[3]);
}

echo json_encode(array("user_data"=>$response));

?>