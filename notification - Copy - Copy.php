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
<style>

.error{
	color:red;
	margin-left:30px;
}<head>
<style>

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
&nbsp&nbsp<h1><font color=" #0d0d0d">Add Notices</h1>
                    
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
          <img border="0" alt="banner image" src="hd2.jpg" width="1320" height="350" >
          </a>
                   </div>
</style>
</head>
<body>


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
