<?php
$id=$_POST["id"];
$name=$_POST["name"];
$address=$_POST["address"];
$gender=$_POST["gender"];
include 'conection.php';
$sql="update   `kala`. tbl_userreg SET  `name` =  '$name',`address` = '$address',`gender` = '$gender' WHERE  id =$id";
$results=mysqli_query($con,$sql);
//echo $sql;
header("location:studview.php");
?>