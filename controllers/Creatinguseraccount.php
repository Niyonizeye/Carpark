
<?php
      include('../Databases/dbconfigurations.php');
      $error="";
      session_start();
    if(isset($_POST['register'])){ 

        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $telephone=$_POST['phonenumber'];
        $gender=$_POST['gender']; 
        // $hash_password=md5($password);  
        $sql_u="SELECT * from table_users where email='$username'";
        $result = $conn->query($sql_u);
        $row = mysqli_fetch_array($result);
              
        if($result->num_rows > 0){

            $error="Email Already Exist";                  
           }

          else {

              $sql = "INSERT INTO table_users (firstname, lastname, email,password,telephone,gender)
              VALUES ('$firstname', '$lastname', '$username','$password','$telephone','$gender')";
              if ($conn->query($sql) === TRUE)
                {
                    echo '<script type="text/javascript">';
                    echo ' alert("Your successful registerd")';
                    echo '</script>';

                  $sql_session = "select user_id from table_users where username='$username'";
                  $result = $conn->query($sql_session);
                   $row = mysqli_fetch_array($result);
      
                     if($result->num_rows > 0){
                         $_SESSION['userId'] = $row['user_id'];
                        }
                     header("location:../html/mainpage.php");
                } 
               else{

               echo "Error: " . $sql . "<br>" . $conn->error;
            }
              $conn->close();
        } 
    }
?>