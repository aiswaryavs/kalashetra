<?php
$id=$_REQUEST['id'];
include 'conection.php';
$sql="DELETE FROM tbl_userreg where id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:studview.php")
?>