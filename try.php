<?php

$username=$_POST['username'];
$password=$_POST['pwd'];

if (isset($_POST['submit']))
{
	if (!empty($username)&&!empty($password))
	{
		if($username=='SkillUp' && $password=='SkillUp')
		{
			echo "Welcome";
		}
		else
		{
			echo"Please enter correct username or password";
		}
	}
	else
	{
		echo "Please fill all fileds";
	}
}
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in form</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ied=edge"/>
	<link rel="stylesheet" type="text/css" href="try.css">
</head>
<body method="post" action="try.php">
	<form>
		<input type="text" placeholder="enter username" name="username"><br>
		<input type="text" placeholder="enter password" name="pwd"><br>
		<button type="submit" name="submit">submit</button>
	</form>
</body>
</html>
