<?php

if(isset($_REQUEST["usubmit"]))
{

 $uname=$_REQUEST["uname"];	
$upass=$_REQUEST["upass"];

$uresponse=$_REQUEST["uresponse"];
$hobby=implode(',',$_REQUEST["hobby"]);
$email=$_REQUEST["umail"];
$secretquestion=$_REQUEST["sec"];
$answer=$_REQUEST["ans"];
$gender=$_REQUEST["gender"];
$dob=$_REQUEST["dob"];

$conn=mysqli_connect('localhost','root','','abc12');
$query="insert into registration values
('$uname','$upass','$uresponse','$hobby','$email','$secretquestion','$answer','$gender','$dob')";
$r=mysqli_query($conn,$query);
if($r>0)
{	echo "record insert".$r;

}else
	echo "not inserted";


}





?>

<html>
<head>
<link rel="stylesheet" href="reg.css">
</head>
<body bgcolor="silver">

<CENTER>
<div id="log">
<h1>REGISTRATION</h1>
<form method="GET" action="registration.php">
<p>username::<input type="text" name="uname" required></p> <br> <br>
<p>password::<input type="text" name="upass"required></p><br> <br>
<p>response::<input type="text" name="uresponse"required></p><br> <br>
<p>email::<input type="text" name="umail"required></p><br> <br>
<p>secret question::</p><select name="sec">
                 <option>what your nick name?</option>
                 <option>what your fav movie?</option>
                 <option>what your fav actor?</option>

                 <select/> <br> <br>
<p>answer::</p><input type="text" name="ans"required><br> <br>
<p>gender::</p><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female"/>female<br> <br>
<p>hobby::</p>
<input type="checkbox" name="hobby[]" value="music">music
<input type="checkbox" name="hobby[]" value ="football">football
<input type="checkbox" name="hobby[]" value="cricket"/>cricket<br> <br>
<p>date of birth::</p><input type="date" name="dob"/><br> <br>
<input type="submit" name="usubmit" value="submit"/><br>
</form>
</div></CENTER>
</body>
</html>
