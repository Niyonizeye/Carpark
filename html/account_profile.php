<?php
session_start();
include('../Databases/dbconfigurations.php');
$user_id=$_SESSION['userId'];
$display="SELECT firstname,lastname,email,telephone,gender,photo from table_users where user_id=$user_id";
$result = $conn->query($display);

// update user info

if(isset($_POST['update']))
{ 
 $fname=$_POST['fname'];
 $lname=$_POST['lastName'];
 $telephone=$_POST['telephone'];
 $gender=$_POST['gender'];
 $sql_update="UPDATE table_users SET firstname = '$fname', lastname= '$lname',telephone='$telephone',gender='$gender'
 WHERE user_id = '$user_id'";
//    $result = $conn->query($sql_update);
//    $row = mysqli_fetch_array($result);
         
//    if($result->num_rows > 0){

//        echo 'update successful';                  
//       }
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
                 <ul>
                     <li><a href="#"></a></li>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="account.php">Account</a></li>
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
                    } else {
                        echo "0 results";
                    }
           ?>
               <div class="bookdet_dev">
                  
               <div class="user_profile"><?=$user_img;?></div>
               <span><a href="uploadphoto.php">Change profile Picture</a> </span>
                     
               </div>
                 <div class="park_content">
                
                <div class="userdata">
                <form action="account_profile.php" method="POST"><br><br>
                         <h2 class="text_form">Update Profile information</h2>
                         <br>
                         <p class="text_form">Firstname</p>
                         <input type="text" name="fname" value="<?=$firstname?>">
                         <p class="text_form">Lastname</p>
                         <input type="text" name="lastName" value="<?=$lastname?>">
                         <p class="text_form">Email</p>
                         <input type="email" name="userName" value="<?=$username?>">
                         <p class="text_form">password</p>
                         <input type="password" name="password" required>
                         <p class="text_form">Telephone</p>
                         <input type="text" name="telephone" value="<?=$telephone?>">
                         <p class="text_form">select gender</label><br><br>
                         <p class="text_form">
                            Male<input type="radio" name="gender" value="male" >
                            Female<input type="radio" name="gender" value="female">
                      </p> <br>
                        <input type="submit" value="Update" name="update" class="register_bttn">
                         
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
