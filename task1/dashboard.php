<?php
	session_start();
	if(!isset($_SESSION["user"]))
	//if(!isset)$COOKIE["user"]))
	{
		header ("Location: login.php");

	}
?>

<html>
	<body>
	<h1>Hello <?php echo $_SESSION["user"];?></h1>
	<!--<h1>Welcome<?php echo $COOKIE["user"];?></h1> -->
	</body>

</html>