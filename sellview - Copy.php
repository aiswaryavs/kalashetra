
<!DOCTYPE html>
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
        <title>painting...</title>
    </head>>
<body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="LOGO1.png" style="margin-left:0px">
                   
</div>
</div>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        <nav>

<li><a href="index.php"><b>HOME</b></a></li>
     
                        
<li><a href="logout.php"><b>LOGOUT</b></a></li>

                </nav>

            </header>


            <div id="b_image">
         <a href="http://www.w3schools.com">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img border="0" alt="image" src="p1.jpg" width="1320" height="350" >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp
</br>
<marquee direction="right"><h2><font color="#000000">My Cart<img src="cart.jpg" style="margin-left:0px"></font></h2></marquee>
<table align="center" width="200" border="1">
  <tr>
     <td><font color="black">&nbsp;Image</font></td>
    <td><font color="black">&nbsp;Type</font></td>
	<td><font color="black">&nbsp;Discription</font></td>
	
    
  
   
  </tr>
<?php
include 'conection.php';
$results=mysqli_query($con,"SELECT * FROM `tbl_sell`");
while($row=mysqli_fetch_array($results))
{

?>
<tr>
<td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td>
<td><input name="type" type="text" value="<?php echo $row['type']; ?>"/></td>
<td><input name="description" type="text" value="<?php echo $row['description']; ?>"/></td>
<td><a href="payment.php">
	<img src="pay.png" style="margin-left:0px">
</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>