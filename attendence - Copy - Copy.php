<?php
include 'conection.php';
session_start();
if(isset($_POST["usertype"]))
{
	$usertype=$_POST["usertype"];
	//$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`,`username`, `password`, `conformpassword`, `usertype`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$username','$password','$conform','$usertpye')";
	
}
	

//echo $c;
//$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`, `password`, `conformpassword`, `username`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$username','$password','$conform')";
//echo $sql;

//$sql="INSERT INTO `tbl_userreg`( `name`, `address`, `gender`, `dob`, `phno`, `email`,`yoa`,`type`,`username`, `password`, `conformpassword`, `utype`) VALUES ('$name','$address','$gender','$dob','$phone','$email','$yoa','$type','$username','$password','$conform','$usertype')";
//$result1=mysqli_query($con,$sql) or die(mysqli_error($con));
//$sql1="INSERT INTO `kala`.`tbl_login1` (`username`, `password`, `conformpassword`, `role`) VALUES  ('$username','$password','$conform',0)";
//echo $sql;
//$result=mysqli_query($con,$sql1);
//echo "REGISTER Sucessfully";

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
&nbsp&nbsp<h1><font color=" #0d0d0d"> Attendence Entry Page</h1>
                    
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
          <img border="0" alt="banner image" src="a2.jpg" width="1320" height="350" >
          </a>
                   </div>
</style>
</head>
<body>


<div><form name="myform" id="myform" onsubmit="return validateForm()" method="post" action="#"><center>
<table>

	<tr><td> Addmission Year</td> <td><input type="date" name="yoa" placeholder="dd/mm/yy" ></td></tr></br><tr></tr>
	<tr><td>Type</td> <td>
          <select id="type" name="type" style="width:100px;">
              <option value="item" selected>Type</option>
			  <option value="dance">dance</option>
              <option value="music">music</option>
              <option value="painting">painting</option>
              </select>
			  
	<?php 
	//
	//var_dump($_SESSION);
	?>
	
</table>
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Get Details" name="aa" action="#" />
<br>
<br>

<table align="center" width="200" border="1">
  <tr>
  <td><font color="black">&nbsp;addmission no</font></td>
    <td><font color="black">&nbsp;name</font></td>
	<td><font color="black">&nbsp;Attendence(100%)</font></td>
	</tr>
		<?php 
		if(isset($_POST['aa']))
		{
			$a=$_POST['yoa'];
			$b=$_POST['type'];
			
			$_SESSION['date1']=$a;
			$_SESSION['type']=$b;
		}
		if(isset($_SESSION['type']))
		{
			 $a=$_SESSION['date1'];
			$b=$_SESSION['type'];
			echo $b;
			//echo "select * from tbl_userreg where yoa='$a' and type='$b'";
			$res=mysqli_query($con,"select * from tbl_userreg where yoa='$a' and type='$b'");
			
			while($row=mysqli_fetch_array($res))
				
			{
				$id=$row['id'];
				$dateTime1 = date_create('now')->format('Y-m');
				$from1="$dateTime1-01";
				$to1="$dateTime1-31";
				//echo $from1;
				$sql2="SELECT * FROM `tbl_attendence` WHERE `date`>='$from1' AND `date`<='$to1' AND `stud_id`='$id'";
				$re=mysqli_query($con,$sql2);
				$row2=mysqli_fetch_array($re);
				$tt=$row2['att_id'];
				//echo $tt;
				if($row2['att_id']!="")
				{
				 continue;
				}
				?>
				

    
    

   <form name="dd" action="#" method="post">
               <tr><td><?php echo $row['id']; ?></td> <td><?php echo $row['name']; ?>
			   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			   <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
				<td><input type="text" name="t1"></td>
				&nbsp&nbsp<td><input type="submit" value="SUBMITT"  name="save"  /></td></tr> 
				</form>
				
		<?php			
			}
		} ?>
		

	&nbsp&nbsp
	</table>
	<?php
	if(isset($_POST['save']))
		{
	$attendence=$_POST['t1'];
	$id=$_POST['id'];
	$name=$_POST['name'];	        
	$dateTime = date_create('now')->format('Y-m-d');
	
		
			//echo $dateTime;
	//INSERT INTO `tbl_attendence`(`att_id`, `stud_id`, `name`, `attendence`) VALUES (
	$sql="INSERT INTO `tbl_attendence`(`stud_id`, `name`, `attendence`, `date`) VALUES ('$id','$name','$attendence','$dateTime')";
	$result1=mysqli_query($con,$sql) or die(mysqli_error($con));

		}	
			
	?>
	
	

</form></div>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/validation1.js"></script>
<div class="footer"><font color="white">
© 2016  All rights reserved.
</font></div>
</body> 
</html>
