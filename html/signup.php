
<?php
      include('../controllers/creatinguseraccount.php');
      
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
                     <li><a href="#">About us</a></li>
                     <li><a href="signup.php">Signup</a></li>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="help.php">Help</a></li>
                 </ul>
             </div>   
        </div>
        <div class="main_content">
            <div class="user_form"><br><br>
                    <span class="main_text"> Welcome To Signup Page</span> <br><br>
                    <div class="text-field">
                        <form action="signup.php" method="POST" >
                        <p class="text_form">Firstname</p>
                        <input type="text" name="fname" required>
                        <p class="text_form">Lastname</p>
                        <input type="text" name="lname" required> 
                        <p class="text_form">Email</p>  
                        <input type="email" name="username"required><br>
                        <span class="error" id="result"><?php echo $error;?></span>
                        <p class="text_form">Password</p>
                        <input type="password" id="psw" name="password" required>
                        <span id="message">
                            <p id="length" class="invalid">Strong password</p>
                        </span>
                        <p class="text_form">Phone number</p>
                        <input type="text" name="phonenumber" required>
                        <p class="text_form">Select gender</p><br>
                        <p class="text_form">
                            Male       <input type="radio" name="gender" value="male">    Female      
                        <input type="radio" name="gender" value="female">
                        </p>
                        <input type="submit" class="btn_form" name="register" value="Create an account"> 
                       </form>
                        <div class="linkText" > Already have an account?<a href="login.php"> signin here!</a></div>
                        
                        
                    </div>
          
            </div>     
        </div>
        <div class="footer_contentDiv">
            <div class="footer_content">
                
            </div>
         </div>
    </div>
    <script src="../script/index.js"></script>
</body>
</html>