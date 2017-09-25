
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
<marquee direction="right"><h2><font color="#000000">Our Team</font></h2></marquee>
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;address</font></td>
    <td><font color="black">&nbsp;gender</font></td>
    
  
   
  </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_userreg`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><input name="d_name" type="text" value="<?php echo $row['name']; ?>"/></td>
<td><input name="d_address" type="text" value="<?php echo $row['address']; ?>"/></td>
<td><input name="d_gender" type="text" value="<?php echo $row['gender']; ?>"/></td>
<tr><td><input type="submit" value="Edit" name="submit"></td>
<tr><td><input type="submit" value="Delete" name="submit"></td>
<tr><td><input type="submit" value="Cancel" name="submit"></td>
</tr>
<?php } ?>
</table>
</body>
</html>