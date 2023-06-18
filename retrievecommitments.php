<html>
    <head>
        <title></title>
        

    </head>
    <body>
<?php    
   session_start();
  
    require_once "includes/define.php";
 	require_once "classes/pdo.commitments.php";  
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $db = new Commitments();

  
    $db->setprofile($_SESSION['userid']);
    $db->getcommitinfo();
    if ($db->rowCount()>0){
    	$info = $db->resultset();
	    foreach ($info as $row) {

                if ($row['level'] != "") {
                    echo '<div class="row">' . 
	                    	'<div1>' . 
	                    		'<img src="images/colleges/'.$row['image'].'"/>' . 
	                    	'</div1>' . 
	                    	'<div2>' . $row["level"] . '</div2>' . 
	                    	'<div3>' . $row["commitcollege"]. '</div3>' . 
	                    	'<div3 style="margin-left: 40px; padding-left: 10px; text-align: left;">' . $row["percentage"]. '% Commitment Level</div3>' . 
	                    '</div>';
                    echo '<div class="rowComment" style="margin-top: 35px;">' 
                    		.'<div id="iddbcommitMessage" class="postComment">' . $row['commitmessage']. '</div>' 
                    		.'<div class="row3_a">' . $row["updatecommit"]. '</div>' 
                    	. '</div>';
                }
                        
                echo "<input type='hidden' id='iddbcommitlevel' value='". $row["level"] ."'/>"; 
                echo "<input type='hidden' id='iddbcommitcollege' value='". $row["topcollege"] ."'/>"; 
                echo "<input type='hidden' id='iddbcommitpercentage' value='". $row["percentage"] ."'/>"; 
                
                if ($db->rowCount() > 0) 
                	echo '<div class="hide_1">' . '<form action="deletecommitments.php" method="post">' . '<button type="reset2" id="reset2" style="margin-left: 15px;">Delete</button>' . '</form>' . '</div>';
		}
	}
	            if ($row['level'] == "") {
	                echo '<div class="empty">' . '<div class="emptyText">' . "You are currently not committed to a college." . '</div>' . '</div>';
	            }

?>
    

        
    </body>
</html>