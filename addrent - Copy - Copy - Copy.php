<?php
include 'conection.php';
if(isset($_POST['submit']))
{
$type=$_POST["type"];
$description=$_POST["description"];
$cost=$_POST["cost"];
$duration=$_POST["duration"];
$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
//echo "$image";
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$sql="INSERT INTO `tbl_type_item_add`(`type`, `description`, `cost`,`duration`,`image`)VALUES ('$type','$description','$cost','$duration','$image')";
//print_r($sql);
$result=mysqli_query($con,$sql);
}
?>
<html>
    <head>
        <link rel="stylesheet" href="welcomestyle.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
        
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
        <title>rent...</title>
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
<li><a href="adhome.php"><b>HOME</b></a></li>
      
                        
<li><a href="logout.php"><b>LOGOUT</b></a></li>

                </nav>

            </header>


            <div id="b_image">
         <a href="http://www.w3schools.com">
      <img border="0" alt="image" src="log2.jpg" width="1320" height="350"/ >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp
</br>
<h1><center>Add rent items</center></h1>


<br>
<form action="#" method="post" name="myform" id="myform"  enctype="multipart/form-data">
<center><table border="1" width="400" height="300">
<tr>
<td align="right"<b> Image</b></td>
<td><center><input type="file" name="image" id="image"/></center></td>
</tr>

<tr><td>Type</td> <td>
          <select id="type" name="type" style="width:100px;">
              <option value="item" selected>subject</option>
			  <option value="dance">dance</option>
              <option value="music">music</option>
              <option value="painting">painting</option>
              </select>
<tr>
<td align="right"<b>Description </b></td>
<td><center><input type="text" name="description" id="description"  class="oh-autoval av-name" av-message="Invalid Discription" ></center></td>
</tr>
<tr>
<td align="right"<b>Cost </b></td>
<td><center><input type="text" id="cost" name="cost"  class="oh-autoval av-price" av-message="Invalid pyment"></center></td>
</tr>
<tr>
<td align="right"<b>duration </b></td>
<td><center><input type="text" id="duration" name="duration" class="oh-autoval av-price" av-message="Invalid cost"></center></td>
</tr>
<tr>
<td colspan="6" align="center"  ><b><input type="submit" name="submit" value="submit" onclick="alert('Insert successfully')"</b></td>
</tr>
</table>
</form>
<script src="js/jquery.js"></script>
<script src="js/oh-autoval-script.js"></script>
</center></body></html>