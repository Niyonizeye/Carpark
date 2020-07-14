<?php
     session_start();
     include('../Databases/dbconfigurations.php');
     // login authentication
     $error="";
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

       if ($username != "" && $password != ""){
           $sql = "select user_id, email,password from table_users where email='".$username."' and password='".$password."'";
           $result = $conn->query($sql);
           $row = mysqli_fetch_array($result);

           if($result->num_rows > 0){
            $_SESSION['userId'] = $row['user_id'];
          echo "you are successful logedin";
            header("location:../html/adminlogin.php");
           }
           else
           {
              $error="Wrong Username or password";
           }
        }           
    }     
?>