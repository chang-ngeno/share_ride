<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Request Ride</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
	<div class="row">
		<?php
		require("../pages/header.php");
		//require("sys.inc.php");
		?>
		<form action="reg_ride.php" method="POST">
			Origin: <input type="text" name="origin"><br/>
			destination:<input type="text" name="destination"><br/>
			capacity:<input type="text" name="capacity"><br/>
			
			<input class="button" type="reset" value="cancel">
			<input class="button" type="submit" value="Submit">
		</form>
		<?php
		require("../pages/footer.php");
		?>
		</div>
		<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
		<script src="js/nav-mobile.js"></script>
		<script type="text/javascript">
		</script>
	</body>
</html>