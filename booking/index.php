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
			require("../pages/header.php");
			require("../config/config-db.php");
			$con=mysqli_connect($host,$user,$passwd,$dbname);
			if (!$con){
				die("could not connect to database!".mysqli_connect_error());
			}else{
				$query = "select * from ride where is_booked='N'";
				$result=$con->query($query);
				//mysqli_fetch_all($result,)
				
				$con->close();
			
			?>
			<table border="2px" width='800px'>
				<tr><td>S/No</td><td>Origin</td><td>Destination</td><td>space available</td><td>Book</td></tr>
				<?php foreach ($arr_results as $row)?>
				<tr><td><?php echo $row['ride_id']?></td>
				<td><?php echo $row['origin']?></td>
				<td><?php echo $row['destination']?></td>
				<td><?php echo $row['capacity']?></td>
				<td><?php echo "Book"?></td>
			</tr>
		</table>
		<?php
			}
		require("../pages/footer.php");
		?>
	</div>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
	<script src="js/nav-mobile.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>