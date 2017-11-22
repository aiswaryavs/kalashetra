<?php include_once 'conection.php';?>
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>rent</title>
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
<li><a href="index.php"><b>Home</b></a></li>
                       
                      <li><a href="#"><b>ABOUT US</b></a></li>
                        <li><a href="logout.php"><b>LOGOUT</b></a></li>

</li>
</ul>

                </nav>
<br>
            </header>
            <div id="b_image">
          <a href="prod.php">
          <img border="0" alt="banner image" src="ve7.jpg" width="1320" height="350" >
          </a>
                   </div>


            
<br>
<h3>AVAILABLE ITEMS</h3>
<br>
<?php
	$query=mysqli_query($con,"Select * from tbl_type_item_add ");
	while($row=mysqli_fetch_array($query)){
		?>
		<form class="herb_div" action="urent.php" method="post">
		<div >
		<a href="aa.php?id=<?php echo $row['item_id']?>">
		<img src="<?php echo $row['image']?>" width="250px" height="180px"></a>
		<center><?php echo $row['type']?></center>
		<center><?php echo $row['description']?></center>
		
        <center><?php echo "per day RS.".$row['cost']?></center>
        
		</div>
		</form>
		<?php
	}
?> 
  
    </body>
</html>