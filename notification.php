<?php
include 'conection.php';
if(isset($_POST["submit"]))
{
$discription=$_POST["discription"];
//echo $c;
//$sql="INSERT INTO `tbl_course`(`c_id`, `name`, `type`, `duration`, `cost`, `seat`) VALUES ('$name','$type','$duration','$cost','$seat')";
//echo $sql;
//$result1=mysqli_query($con,$sql);
$sql1=$sql="INSERT INTO `tbl_notification`( `discription`) VALUES  ('$discription')";
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
<h1><center><p><font color=" #0d0d0d">Notifications</p></h1>

<div><form name="myform" id="myform" method="post" action="#"><center>
<table>
     <tr><td> Discription</td> <td><input type="text" name="discription" required></td></tr>
	 <tr><td><input type="submit" value="submit" name="submit" ></td></tr></center>
		
	&nbsp&nbsp
</table>
</form></div>

<div class="footer"><font color="white">
© 2016 Amalagiri Hospital of medical science. All rights reserved.
</font></div>
</body> 
</html>
