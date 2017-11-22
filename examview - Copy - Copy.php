<!DOCTYPE html>
<html >
<head>
<style>
body{
	background-image:url(m4.jpg);
	background-size:cover;
}
<title>Book show</title>
</style>
</head>
<body>
<center><h2><font color="#000000">Examination Details</font></h2></marquee></center>
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;date</font></td>
	<td><font color="black">&nbsp;subject</font></td>
	<td><font color="black">&nbsp;category</font></td>
	<td><font color="black">&nbsp;time</font></td>
  </tr>




<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_exam`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><?php echo $row['e_name']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['e_sub']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['time']; ?></td>
<?php } ?>