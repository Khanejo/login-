<?php
if(isset($_REQUEST["user"]))
{
$user=$_REQUEST["user"];	
$gender=$_REQUEST["gender"];
$security=$_REQUEST["sec"];
$answer=$_REQUEST["ans"];
$dob=$_REQUEST["dob"];
}

if(isset($_REQUEST["usubmit"]))
{
	header("location:editprofile1.php");

}
?>


<html>
<head>
</head>
<body bgcolor="lime">
<h1><marquee>EDIT PROFILE</h1></marquee>
<form method="GET" action="editprofile1.php">
username::<input type="text" name="user" value="<?php $username; ?>" /><br><br>
gender::<input type="text" name="gender" value="" /><br><br>
security question::<select name="sec">
<option>what is the name of your pet</option>
<option>what is your favorite food</option>
</select><br><br>
answer::<input type="text" name="ans" required /><br><br>
dob::<input type="date" name="dob"/><br><br>
<input type="submit" name="usubmit" value="submit"/>
</body>
</html>
