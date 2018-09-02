<?php


session_start();
if(isset($_REQUEST["uname"])&&isset($_REQUEST["upass"]))
	
{
	$user=$_REQUEST["uname"];
	$pass=$_REQUEST["upass"];
}
if($user=="raj"&&$pass=="ss")
{
$_SESSION["u"]=$user;
	header("location:inbox1.php");
}
else if($user=="admin"&& $pass=="admin")
{$_SESSION["u"]=$user;
header("location:inbox1.php");	
}
else
{echo "invalid user";	
}
?>

<html>
<head>
<link rel="stylesheet" href="reg.css">
</head>
<center>
<body background=red>

<form method="GET" action="login1.php">
username::<b><input type="text" name="uname"/></b><br><br>
password::<input type="text" name="upass"/><br><br>
<input type="submit" name="usubmit" value="login"/><br><br>
<a href="registration.php">signup</a><br><br>
<a href="forgot.php">forgot password</a><br><br>
</form>

</body>
</center>
</html>
