<?php
	$uname=$pass="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		if($uname=="Shehrin" && $pass= "1234")
		{
			session_start();
			$_SESSION["user"]=$uname;
			//setcookie("user",$uname,time()+60,"/");
			header("Location: dashboard.php");
		}
	}	
?>
<html>
	<head>LOG IN</head>
	<body>

		<form method="POST">
			<input type="text" name="uname"><br>
			<input type="password" name="pass"><br>
			<input type="submit" name="login">
		</form>

	</body>
</html>