<?php
     session_start();
     include('../Databases/dbconfigurations.php');
     $admin=$_SESSION['userId'];
     $sql = "select user_id from table_users where admin=1";
     $result = $conn->query($sql);
     $row = mysqli_fetch_array($result);

     if($result->num_rows > 0){
       
      if($row['user_id']==$admin){
        // echo "success";
        //  echo $admin;
         header("location:../html/admin.php");
      }
      else{
        header("location:../html/mainpage.php");
      }
     }
     else
     {
      echo "no admin  found";
     }
     
?>