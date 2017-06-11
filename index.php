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
			// $bg_image = "assets/images/bg-1.jpeg";
				require('pages/header.php');
			?>
			<div class="row">
				<!-- <div class="container" style="background-image: url('<?php echo $bgimage;?>');"> -->
				<h2 class="header-text"> welcome to Super Rides</h2>
				
				<div class="large-6 small-12 columns">
					<div class="main-content">
						<img src="assets/images/bg-1.jpeg">
						<div class="text-content">
							<p> search for different cars in your area that have a space</p>
						</div>
						<a class="hollow button" href="ride/index.php">get a ride</a>
					</div>
				</div>
				
				<div class="large-6 small-12 columns">
					<div class="main-content">
						<img src="assets/images/bg-1.jpeg">
						<div class="text-content">
							<p> Do you have an extra space on your car?</p>
							<p></p>
						</div>
						<a class="hollow button" href="ride/index.php">give ride</a>
					</div>
				</div>
			</div>
		</div>
		<?php
		require('pages/footer.php');
		?>
	</div>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="./assets/js/nav-mobile.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>