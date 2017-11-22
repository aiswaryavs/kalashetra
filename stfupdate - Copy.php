<?php
include 'conection.php';
$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=1)
{	
	header('location:staffupdate.php');
}
if(isset($_POST['delete']))
{
$a=$_POST["name"];
$b=$_POST["address"];
//$f=$_POST["ufile"];
$c=$_POST["gender"];
$m=$_POST["sid1"];


$sql2="UPDATE `tbl_userreg` SET `status`=0 WHERE `id`=$m";
$result=mysqli_query($con,$sql2);
//$sql1="UPDATE `login` SET `delstatus`=1 WHERE `reg_id`=$m";
//$result2=mysqli_query($con,$sql1);
header('location:bookshow.php');
}
if(isset($_POST['edit']))
{
$a=$_POST["firstname"];
$b=$_POST["address"];
$c=$_POST["gender"];
$m=$_POST["sid1"];

$sql="UPDATE `tbl_userreg` SET `name`=$a,`address`=$b,`gender`=$c WHERE `id`=$m";
$result=mysqli_query($con,$sql);
header('location:bookshow.php');
}
?>