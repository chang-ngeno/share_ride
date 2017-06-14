<?php
		require("../config/config-db.php");
		$con=mysqli_connect($host,$user,$passwd,$dbname);
		if (!$con){
			die("could not connect to database!".mysqli_connect_error());
		}
		$sql="insert into user (user_id,username,password) values (NULL,'".$_POST['myusername']."','".$_POST['mypassword']."');";
		$result=$con->query($sql);
		if($result){
			header("location:../index.php");
		}
		else {
			echo "Could not create user";
		}
	
?>