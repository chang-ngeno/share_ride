<!DOCTYPE html>
<html>
<head>
	<title></title>

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
</body>
</html>
