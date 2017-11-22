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
$type=$_POST["type"];
$username=$_POST["username"];
$password=$_POST["password"];
$conform=$_POST["conformpassword"];
$usertype="staff";
//var_dump($_POST);
if(isset($_POST["usertype"]))
{
	$usertype=$_POST["usertype"];
	//$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`,`username`, `password`, `conformpassword`, `usertype`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$username','$password','$conform','$usertpye')";
	
}
	

//echo $c;
//$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`, `password`, `conformpassword`, `username`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$username','$password','$conform')";
//echo $sql;

$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`,`type`,`username`, `password`, `conformpassword`, `utype`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$type','$username','$password','$conform','$usertype')";
$result1=mysqli_query($con,$sql) or die(mysqli_error($con));
$sql1="INSERT INTO `kala`.`tbl_login1` (`username`, `password`, `conformpassword`, `role`) VALUES  ('$username','$password','$conform',0)";
//echo $sql;
$result=mysqli_query($con,$sql1);
echo "REGISTER Sucessfully";
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
<style>

.error{
	color:red;
	margin-left:30px;
}


.error{
	color:red;
	margin-left:30px;
}
</style>
</head>
<body>
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>User Register</title>
        <style>
p{
text-align: justify;
}
h2{
color:red;
}

        </style>

    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="LOGO1.png" style="margin-left:0px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp<h1><font color=" #0d0d0d">Staff Register </h1>
                    
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<div="signin">
<br>
<br>
<br>


                </div>


      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         <nav>
<br>
<li><a href="adhome.php">Home</a></li>
                      <li class="dropdown">
                       <a href="#" class="dropbtn"> Course</a>
                       <div class="dropdown-content">
                         <a href="herbs.php">Dance</a>
                         <a href="#">Music</a>
                   </div>
                      </li>
					  
					 
                        

</li>
</ul>

                </nav>
<br>
            </header>
            <div id="b_image">
          <a href="prod.php">
          <img border="0" alt="banner image" src="re2.jpg" width="1320" height="350" >
          </a>
                   </div>
</style>
</head>
<body>


<div><form name="myform" id="myform" onsubmit="return validateForm()" method="post" action="#"><center>
<table>
<tr><td> Name:</td> <td><input type="text" name="name" id="name"class="oh-autoval av-name" av-message="Invalid Name"></td></tr>
	<tr><td> Address</td> <td><input type="text" name="address" maxlength="10" id="address"class="oh-autoval av-required" av-message="Invalid Address"></span></td></tr></br><tr></tr>
	<tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
 
  </FIELDSET></td></tr>
    <tr><td>DOB</td><td> <input type="date"  name="dob"  placeholder="dd/mm/yy "required></td></td>
	<tr><td> Mob.no</td> <td><input type="tel" name="phno" id="phno"class="oh-autoval av-phone" NAME="phone" id="ph" min="1" max="10" ></td></tr></br><tr></tr>
	<tr><td> E-mail</td> <td><input type="email" name="email" id="email" class="oh-autoval av-email" av-message="Invalid email address"></td></tr></br><tr></tr>
	
	<tr><td>Type</td> <td>
          <select id="type" name="type" style="width:100px;">
              <option value="item" selected>Type</option>
			  <option value="dance">dance</option>
              <option value="music">music</option>
              <option value="painting">painting</option>
              </select>
	<tr><td> User Name</td> <td><input type="text" name="username" id="username"class="oh-autoval av-username" av-message="Invalid Username"></span></td></tr></br><tr></tr>
	<tr><td> Password</td> <td><input type="password" name="password" id="password"class="oh-autoval av-password" av-message="Invalid Password"/></td></tr></br><tr></tr>
    <tr><td> Conform Password</td> <td><input type="password" name="conformpassword" class="oh-autoval av-password" av-message="Invalid Password"/></td></tr></br><tr></tr>
	<?php 
	
	//var_dump($_SESSION);
	if(isset($_SESSION["username"]))
	{
		?>
		<tr><td></TD><td><FIELDSET><LEGEND>User Type</LEGEND>
  <input type="radio" name="usertype" value="Staff"> Staff<br>
  <input type="radio" name="usertype" value="Student"> Student<br><br>
  </FIELDSET></td></tr>
	<?php
	}
	?>
	
   <tr><td><input type="submit" value="submit" name="submit" ></td></tr></center>
		
	&nbsp&nbsp
</table>
</form>
<script src="js/jquery.js"></script>
<script src="js/oh-autoval-script.js"></script>
</div>

<div class="footer"><font color="white">
© 2016 Amalagiri Hospital of medical science. All rights reserved.
</font></div>
</body> 
</html>
