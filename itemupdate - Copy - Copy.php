<?php
$id=$_POST["id"];
$name=$_POST["name"];
$type=$_POST["type"];
$duration=$_POST["duration"];
$cost=$_POST["cost"];
$seat=$_POST["seat"];
include 'conection.php';
$sql="update   `kala`. tbl_course SET `name`='$name',`type`='$type',`duration`='$duration',`cost`='$cost',`seat`='$seat' WHERE  id =$id";
$results=mysqli_query($con,$sql);
//echo $sql;
header("location:itemview.php");
?>
