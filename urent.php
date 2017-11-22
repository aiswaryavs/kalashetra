
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Herbs...</title>
        <style>
p{
text-align: justify;
}
h2{
color:red;
}

        </style>

    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="LOGO1.png" border="0" id="LogoImage" >

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         <nav>
<br>
<li><a href="#"><b>Home</b></a></li>
                     
                       
                      <li><a href="#"><b>ABOUT US</b></a></li>
                        <li><a href="logout.php"><b>LOGOUT</b></a></li>

</li>
</ul>

                </nav>
<br>
            </header>
            <div id="b_image">
          <a href="prod.php">
          <img border="0" alt="banner image" src="tb15.jpg" width="1320" height="350" >
          </a>
                   </div>
                   <?php
 include_once "conection.php";
 // $usereid=$_SESSION["id"];
  //echo $usereid;
?>

<table align="center" width="200" border="1">
  <tr><font color="black"<html>
    <head>
    <link rel="stylesheet" href="welcomestyle.css" />
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 540px;
    right: 0;
    left:500px;
    width: 50%;
    height: 400px;
}</style>
        <title>users
        </title>
    </head>

    <body>

<td><font color="black">&nbsp;Item name</font></td>
    
    <td><font color="black">&nbsp;Cost</font></td>
    
  </tr>
<?php
$total=0;
$results=mysqli_query($con,"select * from tbl_type_item_add ");
while($row=mysqli_fetch_array($results))
{
  //$tot=$row['duration']*$row['cost'];
  //$total+=$tot;
?>
<td><input name="name"  value="<?php echo $row['type']; ?>"/></td>

<td><input name="cost" type="text" value="<?php echo $row['cost']; ?>"/></td>
<td><a href="payment.php">Best Deal</a></td>
<td><a href="index.php?id">Cancel</a></td>
</tr>
<?php } ?>

</tr>
</table>
