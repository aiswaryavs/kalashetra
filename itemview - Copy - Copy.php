
<!DOCTYPE html>
<html >
<head>
<style>
html{
background:url('Aqua - Leaf.jpg') no-repeat center fixed;
background-size:cover;
}
<title>Book show</title>
</style>
</head>
<body>
<center><h2><font color="#000000">Course List</center></font></h2></marquee>
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;type</font></td>
    <td><font color="black">&nbsp;duration</font></td>
	<td><font color="black">&nbsp;cost</font></td>
	<td><font color="black">&nbsp;seat</font></td>
    
  
   
  </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_course`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['type']; ?></td>
<td><?php echo $row['duration']; ?></td>
<td><?php echo $row['cost']; ?></td>
<td><?php echo $row['seat']; ?></td>
<tr><td> <h3><a href="itemedit.php?id=<?php echo $row['id'];?>" >Edit</a>
<a href="itemdelete.php?id=<?php echo $row['id'];?>">Delete</a>
</tr>
<?php } ?>
</table>
</body>
</html>