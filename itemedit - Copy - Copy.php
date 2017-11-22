<table  width="400" border="1">
  <tr><font color="black"<html>
    <head>
        <title>
        </title>
    </head>

    <body>



</div>
   
  
    <td><font color="black">&nbsp;name</font></td>
    <td><font color="black">&nbsp;Address</font></td>
	<td><font color="black">&nbsp;Gender</font></td>
    </tr>
<?php
$id=$_REQUEST['id'];
include 'conection.php';
$sql="SELECT * FROM  tbl_course  where id=$id";
$results=mysqli_query($con,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee edit</title>
</style>
</head>

<body>
<form action="itemupdate.php" method="post">
<td><input name="name" type="text" value="<?php echo $row['name']; ?>"/></td>
<td><input name="type" type="text" value="<?php echo $row['type']; ?>"/></td>
<td><input name="duration" type="text" value="<?php echo $row['duration']; ?>"/></td>
<td><input name="cost" type="text" value="<?php echo $row['cost']; ?>"/></td>
<td><input name="seat" type="text" value="<?php echo $row['seat']; ?>"/></td>
<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>
</form></table>
</body>
</html>
