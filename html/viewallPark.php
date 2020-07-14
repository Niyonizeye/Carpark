   <?php             
                   include('../Databases/dbconfigurations.php');
                    $sql = "SELECT park_name FROM table_park ORDER BY park_id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                       echo $row['park_name'].'<br>' ;  
                    }  }   

    ?>