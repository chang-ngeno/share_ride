<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Request Ride</title>
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
		<?php
		require("../pages/header.php");
		//require("sys.inc.php");
		?>
		<form action="reg_ride.php" method="POST">
			Origin: <input type="text" name="origin"><br/>
			destination:<input type="text" name="destination"><br/>
			capacity:<input type="text" name="capacity"><br/>
			<input type="submit" value="Submit">
			<input type="reset" value="cancel">
		</form>
		<?php
		require("../pages/footer.php");
		?>
		<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
		<script src="js/nav-mobile.js"></script>
		<script type="text/javascript">
		</script>
	</body>
</html>