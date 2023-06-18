<?php
       session_start();
                
        require_once "includes/define.php";
                
        // Create connection
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM college";
        $result = mysqli_query($conn, $sql);


        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option data-src='images/colleges/".$row['image']."' value='".$row['id']."'>".$row['title']."</option>";
                
               // echo $row['title']."\n";
        	} 
        }
      
        
        mysqli_close($conn);

?>            
            
