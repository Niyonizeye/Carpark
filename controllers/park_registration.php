<?php
      include('../Databases/dbconfigurations.php');
      $error="";
    if(isset($_POST['register'])){ 

        $park_name=$_POST['park_name'];
        $total_place=$_POST['total_place'];
        $available_place=$_POST['total_place'];
        $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $sql_u="SELECT * from table_park where park_name='$park_name'";
        $result = $conn->query($sql_u);
        $row = mysqli_fetch_array($result);
              
              if($result->num_rows > 0){

                  $error="Park Already Exist";                  
               }

          else {

              $sql = "INSERT INTO table_park (park_name,total_place,park_img,available_place)
              VALUES ('$park_name', '$total_place','$file','$available_place')";
              if ($conn->query($sql) === TRUE)
                {
                    echo '<script type="text/javascript">';
                    echo ' alert("Your Park successful registerd")';
                    echo '</script>';
                } 
               else{

               echo "Error: " . $sql . "<br>" . $conn->error;
             }
           } 
    }
?>