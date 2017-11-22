<?php
include 'conection.php';
if(isset($_POST["submit"]))
{
$e_name=$_POST["e_name"];
$date=$_POST["date"];
$e_sub=$_POST["e_sub"];
$category=$_POST["category"];
$time=$_POST["time"];


//echo $c;
$sql="INSERT INTO `tbl_exam`( `e_name`,  `date`, `e_sub`,`category`,`time`) VALUES ('$e_name','$date','$e_sub','$category','$time')";
//echo $sql;
$result1=mysqli_query($con,$sql);
//$sql1="INSERT INTO `kala`.`tbl_login1` (`username`, `password`, `conformpassword`, `role`) VALUES  ('$username','$password','$conform',0)";
//echo $sql1;
//$result=mysqli_query($con,$sql1);
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>

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
        <title>Attendence Entry Page</title>
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
&nbsp&nbsp<h1><font color=" #0d0d0d"> Examination  Entry Page</h1>
                    
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<div="signin">
<br>
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a>

                </div>


      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         <nav>
<br>
<li><a href="staffhome.php">Home</a></li>
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


<div><form name="myform" id="myform" method="post" action="#"><center>
<table>
<tr><td> Exam Name:</td> <td><input type="text" name="e_name"  class="oh-autoval av-name" av-message="Invalid Name"></td></tr>
<tr><td> Date</td> <td><input type="date" name="date" placeholder="dd/mm/yy max="20" required></td></tr></br><tr></tr>
	<tr><td>Type</td> <td>
          <select id="product-select" name="e_sub" style="width:100px;">
              <option value="item" selected>Select</option>
			  <option value="music">dance</option>
              <option value="music">music</option>
              <option value="painting">painting</option>
              </select>
   <tr><td>category</td> <td>
          <select id="product-select" name="category" style="width:100px;">
              <option value="item" selected>Select</option>
			  <option value="dance">bharathanattyam</option>
              <option value="music">classical</option>
              <option value="painting">bhjj</option>
              </select>
	<tr><td>Time</td><td> <input type="time"  name="time"  required></td></td>
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
