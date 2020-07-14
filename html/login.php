<?php

     include('../controllers/userlogin.php');
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index1.css">
    <!-- <link rel="stylesheet" href="../CSS/index.css"> -->
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
                     <li><a href="#">About us</a></li>
                     <li><a href="signup.php">Signup</a></li>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="help.php">Help</a></li>
                 </ul>
             </div>   
        </div>
        <div class="main_content">
            <div class="user_form"><br><br>
                <span class="main_text"> Welcome To Login Page</span> <br><br>
                <div class="text-field">
                <span class="error" id="result"><?php echo $error;?></span>
                    <form action="login.php" method="POST" > 
                    <p class="text_form">Email</p>  
                    <input type="email" name="username"required>
                    <p class="text_form">Password</p>
                    <input type="password" name="password" required>
                    <input type="submit" class="btn_form" value="Login" name="login"> 
                   </form>
                    <div class="linkText"> Don't have an account?<a href="signup.php"> Create an account here!</a></div>
                     
                </div>
      
        </div>     
        </div>
        <div class="footer_contentDiv">
            <div class="footer_content">
              <h3>&copy  Alright Reserved By Jean Paul</h3> 
            </div>
         </div>
    </div>
    <script src="../script/index.js"></script>
</body>
</html>