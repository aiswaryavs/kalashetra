
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
&nbsp&nbsp<h1><font color=" #0d0d0d"> MaMaMgAm FaMiLy</h1>
                    
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
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;address</font></td>
    <td><font color="black">&nbsp;gender</font></td>
	<td><font color="black">&nbsp;DOB</font></td>
    <td><font color="black">&nbsp;PhNumber</font></td>
    <td><font color="black">&nbsp;Email</font></td>
	<td><font color="black">&nbsp;Year Of Join</font></td>
    <td><font color="black">&nbsp;Type</font></td>
    
  
   
  </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_userreg` where utype='staff'");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['phno']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['yoa']; ?></td>
<td><?php echo $row['type']; ?></td>
<tr><td> <h3><a href="stafedit.php?id=<?php echo $row['id'];?>" >Edit</a> 
<a href="stafdelete.php?id=<?php echo $row['id'];?>">Delete</a>
</tr>
<?php } ?>
</table>
</body>
</html>