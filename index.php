<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>super ride</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
		<link rel="stylesheet" href="./assets/css/style.css" />
	</head>
	<body>
	<div class="row">
		<?php
			require('pages/header.php');
		?>
		<div class="row">
		<h2 class="header-text"> welcome to Super Rides</h2> 
		
		<div class="large-6 small-12 columns">
		<h4 class=""> 
		<a class="hollow button" href="ride/index.php">give a ride</a></h4>
		</div>
		<div class="large-6 small-12 columns">
		<a class="hollow button" href="booking/index.php">get a ride</a>
		<!-- <h3>Cancel a booked ride</h3>-->
		</div>
		</div>
	</div>

	<?php
	require('pages/footer.php');
	?>
	</div>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="js/nav-mobile.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>