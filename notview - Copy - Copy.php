
<!DOCTYPE html>
<html >
<head>
<style>
body{
	background-image:url(w2.jpg);
	background-size:cover;
}

<title>Book show</title>
</style>
</head>
<body>
<center><h1><font color="#000000">Notification Board</font></h1>
<table align="center" width="200" border="1">
  <tr>
    <td><font color="black">&nbsp;Discription</font></td>
    </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_notification`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><input name="discription" type="text" value="<?php echo $row['discription']; ?>"/></td>


</tr>
<?php } ?>
</table>
</body>
</html>