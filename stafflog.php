<?php
include_once 'conection.php';
session_start();
if(isset($_POST["submit"]))
{
	
	$username=$_POST["uname"];   //username value from the form
	$password=$_POST["psw"];	//password value from the form
	//echo $username;
	$sql="select* from tbl_login1 where username='$username' and password='$password' and `role`='0'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
    $fetch=mysqli_fetch_array($res);
	$uname=$fetch['username'];
	if($uname!="")
	{
		
			$_SESSION["username"]=$uname;	// setting username as session variable
			header("location:staffhome.php");


	}
    else{
		echo "<script>alert('Invalid Username Or Password');</script>";
	}

}
?>
<html>
<head>
<style>
body{
	background-image:url(wal.jpg);
	background-size:cover;
}

.floating-box{
           float:left;
           width:500px;
           height:350px;
           margin:10px;
         
          }
.float-box{
           
            width:300px;
            height:500px;
            margin:30px;
            
            }
.float-box1{
             float:left;
             width:1318px;
             height:175px;
             margin:10px;
             background-color:gray;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
   box-sizing: border-box;
   
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
}
form {
    border: 3px solid #f1f1f1;
}






.container {
    padding: 60px;
}

span.psw {
    
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}

</style>
</head>

</div>

<div class="div">
<h2 align="right"><a href="patient_home.php"><font color="white">HOME</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="home.php"><font color="white">LOGOUT </font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="contact.html"><font color="white">CONTACT US </font></a></h2>
</div>
<center>
<div class="float-box">
<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><font color="#800000">LOGIN</font></u></h2>

<form name="myform" id="myform" method="post" action ="stafflog.php">

  <div class="container">
     <label><b><font color="orange">Username</font></b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label><b><font color="orange">Password</font></b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
	
    <input type="submit" name="submit" value="submit">
    </div></center>
  
  </div>
</form>
</div>
</body>
</html>