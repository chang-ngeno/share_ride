<!DOCTYPE html>
<html>
<head>
	<title>Cancel A Ride</title>
</head>
<body>
<?php  
	<?php
	$sql_query="update set is_book='Y' where ride_id='".$_POST['ride_id']."';";
	require("../config/config-db.php");
	$con = mysqli_connect($host,$user,$passwd,$dbname);
	if (!$con)
	{
		die ("Failed to connect to MySQL: " . mysqli_connect_error());
	}else{
		$con->query($sql_query);
		$con->close();
		echo "Ride Successfully canceled!";
	}

?>
?>
</body>
</html>