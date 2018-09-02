<?php

if(isset($_REQUEST["upass"]))
{
$newpassword=$_REQUEST["upass"];
$confirmpassword=$_REQUEST["cpass"];
$Oldpassword=$_REQUEST["oldpass"];	
}
if(isset($_REQUEST["usubmit1"]))
{
	header("location:login1.php");
}



$conn=mysqli_connect('localhost','root','','abc12');
$query="insert into changepassword values
('$newpassword','$confirmpassword','$Oldpassword')";
$r=mysqli_query($conn,$query);
if($r>0)
{	echo "record insert".$r;

}
else
{	echo "not inserted";
}
if(isset($_REQUEST["usubmit"]))
{

$query1="update registration set upass='$newpassword' where uname='$user' and upass='$Oldpassword'";
$r1=mysqli_query($conn,$query1);
}
if($r1>0)
{
	echo "password updated";
}
else{
echo "password not updated";	
	
}

?>
<html>

<head>
</head>
<body>
<h1><marquee direction="right"><b> welcome to change password page</b></marquee></h1>
<form method="GET" action="changepassword.php">
new password::<input type="text" name="upass"/>
confirm password::<input type="text" name="cpass"/>
old password::<input type="text" name="oldpass"/>
<input type="submit" name="usubmit" value="submit"/>
<input type="submit" name="usubmit1" value="logout"/>
</form>
</body>
</html>
