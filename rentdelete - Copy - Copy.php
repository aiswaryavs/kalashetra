<?php
$id=$_REQUEST['id'];
include 'conection.php';
$sql="DELETE FROM tbl_rentitems` where id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:rentview.php")
?>