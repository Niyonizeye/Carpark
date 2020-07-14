<?php
session_start();
include('../Databases/dbconfigurations.php');
// include('Park_session.php');

$sql = "SELECT park_id,park_name,total_place,park_img,available_place FROM table_park";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
    <div class="Wrapper">
        <div class="header_content">
            <span onclick="openNav()" class="openNav">&#9776;</span>
                <div class="logo_div">ONFSP</div>
                <div class="main_title">Online File Sharing <span>Portal</span></div>
            
             <div class="menu_bar" id="menu_bar">
                <div class="closebtn"> <a href="#" onclick="closeNav()">&times;</a></div>
                 <ul>
                     <li><a href="#"></a></li>
                     <li><a href="index.html">Home</a></li>
                     <li> <a href="">Categories</a> 
                      <div class="dropdown-content">
                        <a href="#">item 1</a>
                        <a href="#">item 2</a>
                        <a href="#">item 3</a>
                      </div>
                    </li>
                     <li><a href="logout.html">Logout</a></li>
                     <li><a href="#">Help</a></li>
                 </ul>
             </div>   
        </div>
        <div class="main_content">
            <div class="park_div">
               <div class="bookdet_dev">
                     <button>Booking Details</button>
                      This part will be developed Soon
               </div>
                 <div class="park_content">
                 <?php
                        if ($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {
                                $park_id=$row["park_id"];
                                $park_name=$row["park_name"];
                                $total_place=$row['total_place'];
                                $park_img=$row['park_img'];
                                $av_place =$row["available_place"];         
                    ?>
                <div class="park">
                    <div class="park_photo"><br><br> This part will be a park PHOOTO<br><?=$park_img?> </div>
                    <div class="park_name">
                        Id:<?=$park_id?> <?=$park_name?> Car Park<br><br>
                         Total Place:<?=$total_place?>
                    </div>
                    <div class="park_seat">
                           <div class="park_place">Availble Place:<br><br> <span><?=$av_place?></span> </div>
                           <input type="submit" value="Book_place" name="book" id="book_btn">
                    </div>
                    
                    
                </div>
                <?php
                    }

                }
                else{
                    echo "Not parking found";
                }
                ?> 
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
</html>p