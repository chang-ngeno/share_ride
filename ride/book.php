<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book Ride</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
		<div class="row">
			<?php
			$sql_query="update ride set is_booked='Y' where ride_id=".$_POST['ride'].";";
			require("../config/config-db.php");
			$con = new mysqli($host,$user,$passwd,$dbname);
			if (!$con)
			{
				die ("Failed to connect to MySQL: " . mysqli_connect_error());
			}else{
				if ($con->query($sql_query) === TRUE) {
				    echo "Ride booking successful";
				    mail ($_POST['email'],"Confirmation for ride booking","This is to confirm that you have successfully booked a ride..","From: info@sharetide.inc" . "\r\n" );
				} else {
				    echo "Error booking a ride: " . $con->error;
				}
				$con->close();
			}
			?>
		</div>
	</body>
</html>