
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
    <td><font color="black">&nbsp;discription</font></td>
    </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_notification`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><input name="discription" type="text" value="<?php echo $row['discription']; ?>"/></td>
<tr><td><a href="notview.php"><input type="submit" value="Edit" name="submit"></a></td>
<tr><td><input type="submit" value="Delete" name="submit"></td>
<tr><td><input type="submit" value="Cancel" name="submit"></td>
</tr>
<?php } ?>
</table>
</body>
</html>