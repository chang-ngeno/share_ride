// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
<?php
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>
<html>
	<body>
		Login Successful
		<?php 
			if (!session_is_registered(myusername)){
				header("login.php");
			}else
			{
				header("../ride/index.php");
			}
		?>
	</body>
</html>


