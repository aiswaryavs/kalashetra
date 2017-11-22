<?php
include 'conection.php';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$type=$_POST["type"];
$duration=$_POST["duration"];
$cost=$_POST["cost"];
$seat=$_POST["seat"];



$sql1=$sql="INSERT INTO `tbl_course`(`name`, `type`, `duration`, `cost`, `seat`) VALUES ('$name','$type','$duration','$cost','$seat')";
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
        <title>Student Register</title>
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
&nbsp&nbsp<h1><font color=" #0d0d0d">Add  New Course</h1>
                    
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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
       
</head>
<body>


<div><form name="myform" id="myform" method="post" action="#"><center>
<table>
<tr>

     <tr><td> Name</td> <td><input type="text" name="name" class="oh-autoval av-name" av-message="Invalid Name"></td></tr>
	 <tr><td>type</td><td> <input type="text"  name="type" class="oh-autoval av-name" av-message="Invalid type"></td></td>
	 <tr><td> duration</td> <td><input type="text" name="duration"  max="20" required></td></tr></br><tr></tr>
	 <tr><td> cost</td> <td><input type="text" name="cost" class="oh-autoval av-price" av-message="Invalid pyment" ></td></tr></br><tr></tr>
	 <tr><td> seat</td> <td><input type="text" name="seat" required></td></tr></br><tr></tr>
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
