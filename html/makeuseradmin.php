<?php
       include('../Databases/dbconfigurations.php');
       if(isset($_POST['register'])){
        $useremail=$_POST['useremail'];
        echo $useremail;
       }
     
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
             </div>   
        </div>
        <div class="main_content">
            <div class="user_form"><br><br>
                    <span class="main_text">Add As Admin</span> 
                    <div class="text-field">
                    
                        <form action="makeuseradmin.php" method="POST" enctype="multipart/form-data" >
                        <p class="text_form">Select User</p>
        
        <p class="text_form">
         <select>
<?php
     $sql = "SELECT email FROM table_users ORDER BY user_id Asc";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
        echo '<option>'.$row['email'].'</option>';  
     }     

?>

</select>
</p>
<?php
       
     }

?>
                        <input type="submit" class="btn_form" name="register" value="Make Admin"> 
                       </form>
                     
                   
                        
                    </div>
          
            </div>     
        </div>
        <div class="footer_contentDiv">
            <div class="footer_content">
                <div class="quicklinks"><h3>Quick Links</h3>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Aboutus</a></li>
                </div>
                <div class="address"><h3>Address</h3>
                    <li><a href="#"> <span><img src="../images/address.jfif"width="30px" height="30px"></span>Kigali</a></li>
                    <li><a href="#">Aboutus</a></li>
                </div>
                <div class="developers"><h3>developers</h3>
                    <li>Engenieer1<div class="userphoto"><img src="#" alt="" srcset=""></div></li>
                </div>
                <div class="support"><h3>Support</h3>
                    <li><a href="#">technical support</a></li>
                </div>
            </div>
         </div>
    </div>
    <script src="../script/index.js"></script>
</body>
</html>