<?php
session_start();
/*if(!$_SESSION('username')){
	header("location:login.php");
}*/
?>
<html>
	<body>
		Login Successful
		<?php 
			header("../ride/index.php");			
		?>
	</body>
</html>


