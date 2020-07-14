<?php
session_start();
include('../Databases/dbconfigurations.php');
$sql_session = "select park_id from table_park";
$result = $conn->query($sql_session);
 $row = mysqli_fetch_array($result);

   if($result->num_rows > 0){
       $_SESSION['park_session'] = $row['park_id'];
       echo $_SESSION['park_session'];
      }
?>