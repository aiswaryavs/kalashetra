<?php
include 'conection.php';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$phone=$_POST["phno"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$conform=$_POST["conformpassword"];

//echo $c;
$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`, `password`, `conformpassword`, `username`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$username','$password','$conform')";
//echo $sql;
$result1=mysqli_query($con,$sql);
$sql1="INSERT INTO `kala`.`tbl_login1` (`username`, `password`, `conformpassword`, `role`) VALUES  ('$username','$password','$conform',0)";
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
<h1><center><p><font color=" #0d0d0d"> Registration Page</p></h1>

<div><form name="myform" id="myform" method="post" action="#"><center>
<table>
<tr><td> Name:</td> <td><input type="text" name="name" required></td></tr>
	<tr><td> Address</td> <td><input type="text" name="address" maxlength="10" required></td></tr></br><tr></tr>
	<tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br><br>
  </FIELDSET></td></tr>
    <tr><td>DOB</td><td> <input type="date"  name="dob" placeholder="dd/mm/yy "required></td></td>
	<tr><td> Mob.no</td> <td><input type="tel" name="phno"  max="20" required></td></tr></br><tr></tr>
	<tr><td> E-mail</td> <td><input type="email" name="email" required ></td></tr></br><tr></tr>
	<tr><td> User Name</td> <td><input type="text" name="username" required></td></tr></br><tr></tr>
	<tr><td> Password</td> <td><input type="password" name="password" required></td></tr></br><tr></tr>
    <tr><td> Conform Password</td> <td><input type="password" name="conformpassword" required></td></tr></br><tr></tr>
   <tr><td><input type="submit" value="submit" name="submit" ></td></tr></center>
		
	&nbsp&nbsp
</table>
</form></div>

<div class="footer"><font color="white">
© 2016 Amalagiri Hospital of medical science. All rights reserved.
</font></div>
</body> 
</html>
