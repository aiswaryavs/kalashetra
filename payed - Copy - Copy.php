<?php
include 'conection.php';
if(isset($_POST['submit']))
{
$card_name=$_POST["card_name"];
$no=$_POST["no"];
$exp_date=$_POST["exp_date"];
$cvv=$_POST["cvv"];
$sql="INSERT INTO `tbl_payment`(`card_name`, `no`, `exp_date`,`cvv`)VALUES ('$card_name','$no','$exp_date','$cvv')";
$result=mysqli_query($con,$sql);
}

?>
<html>
    <head>
        <link rel="stylesheet" href="welcomestyle.css" />
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 560px;
    right: 0;
    left:400px;
    width: 50%;
    height: 400px;
}</style>
        <title>Payment...</title>
    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="LOGO1.png" style="margin-left:0px">
                   
</div>
</div>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        <nav>
<br>
<li><a href="index.php"><b>HOME</b></a></li>
      
                        
<li><a href="logout.php"><b>LOGOUT</b></a></li>

                </nav>

            </header>


            <div id="b_image">
         <a href="http://www.w3schools.com">
      <img border="0" alt="image" src="im13.jpg" width="1320" height="350"/ >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp
</br>
<h1><center>Payment</center></h1>


<br>
<form action="#" method="post" name="myform" id="myform"  enctype="multipart/form-data">
<center><table border="1" width="400" height="300">
<tr>

<td>Card Type</td> <td>
          <select id="card_name" name="card_name" style="width:100px;">
              
			  <option value="credit">Credit</option>
              <option value="debit">Debit</option>
              
              </select>
			  </td></tr>


<tr>

<td align="right"<b>Card No </b></td>
<td><center><input type="text" name="no" id="no"  required></center></td>
</tr>
<tr>

<td align="right"<b>Expiration Date </b></td>
<td><center><input type="date" name="exp_date" id="exp_date"  required></center></td>
</tr>
<tr>

<td align="right"<b>CVV</b></td>
<td><center><input type="password" name="cvv" id="cvv"  required></center></td>
</tr>
<tr>
<td colspan="6" align="center"  ><b><input type="submit" name="submit" value="Proceed" onclick="alert('payment completeted successfully')"</b></td>
</tr>
</table>
</form>
</center></body></html>