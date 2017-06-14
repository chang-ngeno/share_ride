<?php
require("../config/config-db.php");
$con=mysqli_connect($host,$user,$passwd,$dbname);
			if (!$con){
				die("could not connect to database!".mysqli_connect_error());
			}
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql="select * from user where username='".$myusername."' and password='".$mypassword."'";
//$result=;
$count=mysqli_num_rows($con->query($sql));
if($count==1){
	session_start();
	$_SESSION["username"] = $myusername;
	header("location:login_success.php");
}
else {
	echo "Wrong Username or Password";
}
?>