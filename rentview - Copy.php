
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
<marquee direction="right"><h2><font color="#000000"></font></h2></marquee>
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;date</font></td>
    <td><font color="black">&nbsp;duration</font></td>
  
   
  </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_rentitems` ");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><input name="address" type="text" value="<?php echo $row['name']; ?>"/></td>
<td><input name="date" type="text" value="<?php echo $row['date']; ?>"/></td>
<td><input name="duration" type="text" value="<?php echo $row['duration']; ?>"/></td>

</tr>
<?php } ?>
</table>
</body>
</html>