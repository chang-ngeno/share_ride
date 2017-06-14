<html>
<?php
	//echo $_POST["origin"] ."Successfully added! {$_POST["origin"] }"  .  $_POST["capacity"];
	$sql_query="insert into ride (ride_id, origin, destination, capacity, is_booked, driver) VALUES (NULL,'".$_POST['origin']."','".$_POST['destination']."','".$_POST['capacity']."', 'N','".$_POST['gender']."');";
	require("../config/config-db.php");
	$con = mysqli_connect($host,$user,$passwd,$dbname);
	if (!$con)
	{
		die ("Failed to connect to MySQL: " . mysqli_connect_error());
	}else{
		$con->query($sql_query);
		$con->close();
		echo "Successfully added!";
	}

?>
<br/><a href="../index.php">Continue</a>
</html>