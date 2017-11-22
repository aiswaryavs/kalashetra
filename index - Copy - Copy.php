<?php
include 'conection.php';
session_start();
$username=$_SESSION["username"];
//echo $username ;
?>
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>User Page</title>
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
                   <img src="LOGO1.png" style="margin-left:0px">
                    
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<div="signin">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a>

                </div>


      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         <nav>
<br>
<li><a href="index.php">Home</a></li>
                      <li class="dropdown">
                       <div class="dropdown-content">
                         <a href="herbs.php">Dance</a>
                         <a href="#">Music</a>
                   </div>
                      </li>
					  <li class="dropdown">
                       <a href="#" class="dropbtn"> <b>SELL PRODUCTS</b></a>
                       <div class="dropdown-content">
                         <a href="addherb.php">ADD painting</a>
                         </div>
				   </li>
				    <li><a href="adminview.php">View Items</a></li>
					 
					  <li><a href="myprofile.php">profile</a></li>
                      <li><a href="#">ABOUT US</a></li>
                        

</li>

                        

</li>
</ul>

                </nav>
<br>
            </header>
            <div id="b_image">
          <a href="prod.php">
          <img border="0" alt="banner image" src="hd4.jpg" width="1320" height="350" >
          </a>
                   </div>


            <h3>Dance Items</h3>
<br>
<div id="s">
            <div id="saree">
                <a href="kuchipudi.php">
      <img border="0" alt="black saree" src="d1.jpg" width="230" height="210">
      </a>
<h5>&nbsp&nbsp&nbsp&nbsp&nbsp bharathanattya</h5>

<a href="rent.php">

&nbsp&nbsp<input type="submit" value="Know More" action="rent.php" />

</div>

&nbsp&nbsp&nbsp

    <div id="saree1">
                <a href="http://www.w3schools.com">
      <img border="0" alt="pink saree" src="d7.jpg" width="260" height="220">
      </a>
<h5> &nbsp&nbsp&nbspKuchippudi </h5>

<a href="kuchipudi.php">

&nbsp&nbsp<input type="submit" value="Know More" />

</div></a>
&nbsp&nbsp&nbsp

<div id="saree2">

                <a href="http://www.w3schools.com">
      <img border="0" alt="red saree" src="hd1.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp Mohiniyattam</h5>

<a href="mohiniyattam.php">
&nbsp&nbsp<input type="submit" value="Know More" />

</div>
&nbsp&nbsp&nbsp
      <div id="saree3">

                <a href="http://www.w3schools.com">
      <img border="0" alt="white saree" src="d10.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp kathak</h5>

<a href="kathak.php">
&nbsp&nbsp<input type="submit" value="Know More" />

</div>
&nbsp&nbsp&nbsp
<div id="saree4">
                <a href="http://www.w3schools.com">
      <img border="0" alt="white saree" src="manipuri.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp Manipuri</h5>

<a href="manipuri.php">
&nbsp&nbsp<input type="submit" value="Know More" />
</div>

</p>
</div>
</div>
<br>

<h3>Instruments</h3>
<br>
<div id="s">
            <div id="saree">
                <a href="http://www.w3schools.com">
      <img border="0" alt="black saree" src="ve1.jpg" width="230" height="210">
      </a>
<h5>&nbsp&nbsp&nbsp&nbsp&nbsp veena</h5>
<a href="saraswathy.php">

&nbsp&nbsp<input type="submit" value="Know More" />

</div>
&nbsp&nbsp&nbsp
 <div id="saree1">
                <a href="http://www.w3schools.com">
      <img border="0" alt="pink saree" src="tham1.jpg" width="260" height="220">
      </a>
<h5> &nbsp&nbsp&nbsp&nbsp Thampuru</h5>

<a href="thampuru.php">
&nbsp&nbsp<input type="submit" value="Know More" />
</p>
</div>
&nbsp&nbsp&nbsp
<div id="saree2">

                <a href="http://www.w3schools.com">
      <img border="0" alt="red saree" src="vayal.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp violin</h5>

<a href="vayalin.php">
&nbsp&nbsp<input type="submit" value="Know More" />
</p>
</div>
&nbsp&nbsp&nbsp
 <div id="saree3">

                <a href="http://www.w3schools.com">
      <img border="0" alt="white saree" src="tabala1.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp thabala</h5>

<a href="thabala.php">
&nbsp&nbsp<input type="submit" value="Know More" />
</p>
</div>
&nbsp&nbsp&nbsp
<div id="saree4">
                <a href="http://www.w3schools.com">
      <img border="0" alt="white saree" src="gt2.jpg" width="230" height="220">

      </a>
<h5> &nbsp&nbsp&nbsp Gittar</h5>

<a href="gittar.php">
&nbsp&nbsp<input type="submit" value="Know More" />
</p>
</div>
</div>
<br>
<br>

<hr>
            <footer>
                <div id="ourc">
                    <h1>OUR COMPANY</h1>
                    <ul>
                        <li><a href="#">About us</a></li>


                    </ul>
                </div>
                <div id="topctgr">
                    <h1>TOP CATEGORIES</h1>
                 <ul>
                        <li><a href="#">dance</a></li>
                        <li><a href="#">musuic</a></li>
 <li><a href="#">paintings</a></li>
                 </ul>
                    </div>
<div id="useful">
<h1>USEFUL INFO</h1>
<ul>
                        <li><a href="#">contact us</a></li>
                        <li><a href="#">How to buy</a></li>
                        <li><a href="#">Terms&condetions</a></li>

                    </ul>

 </div>
            </footer>
        </div>
</div>
    </body>
</html>
