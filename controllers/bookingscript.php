<?php

    if(isset($_POST['book'])):
        $booked_id = $_POST['booked_id'];

        $sql = "SELECT available_place FROM table_park where park_id=$booked_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $place_tot=$row['available_place'];
            if($place_tot>0){   
        
        $sql_p="UPDATE table_park SET available_place=$place_tot-1 WHERE park_id='$booked_id'";
        if ($conn->query($sql_p) === TRUE) {
                 echo "<script>
                //  const closeButton = document.querySelector('#book_btn')
                //  closeButton.style.background_color='blue'
                 </script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }}
        else{
            echo "No Parking Place";
        }
    }
    else{
     echo " NOT Found";
}
   
    endif;

?>