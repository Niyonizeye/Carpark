<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index1.css">
</head>
<body>
    <div class="Wrapper">
        <div class="header_content">
            <span onclick="openNav()" class="openNav">&#9776;</span>
                <div class="logo_div">ONFSP</div>
                <div class="main_title">Intelligent Car <span>Parking</span></div>
            
             <div class="menu_bar" id="menu_bar">
                <div class="closebtn"> <a href="#" onclick="closeNav()">&times;</a></div>
                 <ul>
                     <li><a href="#"></a></li>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="logout.php">Logout</a></li>
                     <li><a href="#">Help</a></li>
             </div>   
        </div>
        <div class="main_content">
            <div class="user_form"><br><br>
                <span class="main_text">  Welcome To Admin Page </span> 
                <div class="text-field">
                <span class="main_text"> <a href="park_registration.php"> Register Park</a></span><br><br>
                <span class="main_text"> <a href="makeuseradmin.php"> Add user As Admin</a> </span><br><br>
                <span class="main_text"> <a href="Brok_park.php"> Brok Park</a> </span><br><br>  
                <span class="main_text"> <a href="viewallPark.php"> View All park</a> </span><br><br>               
                </div>
      
        </div>     
        </div>
        <div class="footer_contentDiv">
            <div class="footer_content">
                <div class="quicklinks"><h4>Quick Links</h4>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Aboutus</a></li>
                </div>
                <div class="address"><h4>Address</h4>
                    <li><a href="#"> <span><img src="../images/address.jfif"width="30px" height="30px"></span>Kigali</a></li>
                    <li><a href="#">Aboutus</a></li>
                </div>
                <div class="developers"><h4>developers</h4>
                    <li>Engenieer1<div class="userphoto"><img src="#" alt="" srcset=""></div></li>
                </div>
                <div class="support"><h4>Support</h4>
                    <li><a href="#">technical support</a></li>
                </div>
            </div>
         </div>
    </div>
    <script src="../script/index.js"></script>
</body>
</html>