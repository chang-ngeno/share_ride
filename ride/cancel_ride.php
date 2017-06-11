<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cancel Ride</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
		<div class="row">
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
		</div>
	</body>
</html>