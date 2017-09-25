<?php
include 'conection.php';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$type=$_POST["type"];
$duration=$_POST["duration"];
$cost=$_POST["cost"];
$seat=$_POST["seat"];

//echo $c;
//$sql="INSERT INTO `tbl_course`(`c_id`, `name`, `type`, `duration`, `cost`, `seat`) VALUES ('$name','$type','$duration','$cost','$seat')";
//echo $sql;
//$result1=mysqli_query($con,$sql);
$sql1=$sql="INSERT INTO `tbl_course`(`name`, `type`, `duration`, `cost`, `seat`) VALUES ('$name','$type','$duration','$cost','$seat')";
echo $sql1;
$result=mysqli_query($con,$sql1);
echo "REGISTER Sucessfully";
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1><center><p><font color=" #0d0d0d">  New Items</p></h1>

<div><form name="myform" id="myform" method="post" action="#"><center>
<table>
     <tr><td> Name</td> <td><input type="text" name="name" required></td></tr>
	 <tr><td>type</td><td> <input type="text"  name="type" required></td></td>
	 <tr><td> duration</td> <td><input type="text" name="duration"  max="20" required></td></tr></br><tr></tr>
	 <tr><td> cost</td> <td><input type="text" name="cost" required ></td></tr></br><tr></tr>
	 <tr><td> seat</td> <td><input type="text" name="seat" required></td></tr></br><tr></tr>
	 <tr><td><input type="submit" value="submit" name="submit" ></td></tr></center>
		
	&nbsp&nbsp
</table>
</form></div>

<div class="footer"><font color="white">
© 2016 Amalagiri Hospital of medical science. All rights reserved.
</font></div>
</body> 
</html>
