<?php
if(isset($_REQUEST["usubmit"]))
{
header("location:changepassword.php");
}
if(isset($_REQUEST["usubmit1"]))
{
header("location:editprofile.php");
}
if(isset($_REQUEST["usubmit2"]))
{

header("location:login1.php");

}	

?>


<html>
<head>
</head>
<body>
<h1>welcome to setting</h1>
<form>
<input type="submit" name="usubmit" value="change password"/>
<input type="submit" name="usubmit1" value="edit profile"/>
<input type="submit" name="usubmit2" value="logout"/>


</form> 
</body>
</html>






