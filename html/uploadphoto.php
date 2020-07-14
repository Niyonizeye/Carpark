<?php
session_start();
include('../Databases/dbconfigurations.php');
$user_id=$_SESSION['userId'];
$display="SELECT firstname,lastname,email,telephone,gender,photo from table_users where user_id=$user_id";
$result = $conn->query($display);


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
                     <li> <a href="adminlogin.php">Admin Portal</a></li>
                     <li><a href="account_profile.php">Profile</a></li>
                     <li><a href="logout.php">Logout</a></li>
                     <li><a href="#">Help</a></li>
                 </ul>
             </div>   
        </div>
        <div class="main_content">
            <div class="park_div">
            <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $firstname=$row["firstname"];
                            $lastname=$row["lastname"];
                            $username=$row["email"];
                            $telephone=$row["telephone"];
                            $gender=$row["gender"];
                            $user_img='<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" width="100%">';
                        }
                        
// Update user profile

if(isset($_POST['upload'])){ 
    echo "Updated very soon code not available";
    // $update="UPDATE table_users where user_id=$user_id";
    // $fname=$_POST['fname'];
    // $sql="Update table users firstName=$fname";

} 
                    } else {
                        echo "0 results";
                    }
           ?>
               <div class="bookdet_dev">
                  
               <div class="user_profile"><?=$user_img;?> </div>
             
                     
               </div>
                 <div class="park_content">
                
                <div class="park">
                <form action="Uploadphoto.php" method="POST"><br><br>
                       Choose Photo for Upload<br><br>
                       <input type="file" name="file" id="image"><br><br>
                        
                        <input type="submit" value="Update" name="upload" class="register_bttn">
                         
                 </form>
                    
                    
                </div>
                
                 </div>
                                                  
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
