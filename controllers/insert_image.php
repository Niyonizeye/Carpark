<?php
include('../Databases/dbconfigurations.php');
if(isset($_POST['insert'])){
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sql = "INSERT INTO park_images (image_name)VALUES ('$file')";
    if (mysqli_query($conn,$sql))
    {
        echo '<script type="text/javascript">';
        echo ' alert("Your image is now Inserted")';
        echo '</script>';
    } 
    else{
        echo "failed to insert image";
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<h3>Insert Image</h3>
<form action="insert_image.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" id="image"><br>
      <input type="submit" value="insert" name="insert" id="insert">
    
</form>
<table> 
           <tr>
               <th>Image</th>
           </tr>
           <tr>
              <?php
               $sql = "SELECT * FROM park_images ORDER BY images_id DESC ";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo '
                    <img src="data:image/jpeg;base64,'.base64_encode($row['image_name']).'">
                    
                    '; 
                }
             }
                else{
                    echo " NO Image Found";
                }

              ?>
           </tr>
        </table>
</body>
</html>