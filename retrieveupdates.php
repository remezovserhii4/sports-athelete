<html>
    <head>
        <title></title>
        
        
        <style>
        .retrieveUpdates {
                        display: block;
                        width: 320px;
                        height: auto;
                        margin-left: auto;
                        margin-right: auto;
                        background-color: #e0e0e0;
                    }
            .empty {
                display: block;
                width: 320px;
                height: 100px;
                margin-left: auto;
                margin-right: auto;
            }
            .rowComment {
                display: block;
                width: 320px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                background-color: #006ad1;
            }
                .row3_a {
                    display: block;
                    float: none;
                    width: 240px;
                    height: 20px;
                    margin-top: 15px;
                    padding-left: 10px;
                    padding-bottom: 10px;
                    font-family: 'Muli', sans-serif;
                    font-size: 10px;
                    font-weight: 600;
                    font-style: normal;
                    letter-spacing: 0.2px;
                    line-height: 20px;
                    text-align: right;
                    color: white;
                    overflow: hidden; 
                }
                .hide_1 {
                    display: block;
                    width: 320px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 25px;
                    background-color: #e0e0e0;
                }
                .postComment {
                    display: block;
                    width: 290px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 14px;
                    font-weight: 400;
                    letter-spacing: 0.2px;
                    line-height: 20px;
                }
                        #reset2 {
                            display: inline-block;
                            float: left;
                            width: 140px;
                            height: 35px;
                            margin-left: 15px;
                            margin-top: 0px;
                            background-color: #cc0000;
                            color: white;
                            font-size: 12px;
                            font-weight: 400;
                            letter-spacing: 0.5px;
                            line-height: 32px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            outline: 0;
                            outline-offset: 0;
                            background-image: none;
                            -webkit-box-shadow: none;
                            box-shadow: none;
                        }
                        #reset2:hover {
                            background-color: #e53d00;
                            color: white;
                        }
                        
        </style>
    </head>
    <body>
<?php
    session_start();
  
    require_once "includes/define.php";
 	require_once "classes/pdo.updates.php";  
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $db = new Updates();

    /* Check if user already logged in */
    if(!empty($_SESSION['updates'])){
        Header("location: profile.php");
        exit;
    }    
    $db->setprofile($_SESSION['userid']);
    $db->getcommentinfo();
    if ($db->rowCount()>0){
    	$info = $db->resultset();
	    foreach ($info as $row) {
	        if ($row['comment'] != null) {
	            echo '<div class="rowComment">' . '<div class="postComment" id="postcomment">' . $row['comment'] . '</div>' . '<div class="row3_a">' . $row["updatecomment"] . '</div>' . '</div>';
	                            }
	            echo '<div class="hide_1">' . '<form action="deleteupdates.php" method="post">' . '<button type="reset2" id="reset2">Delete</button>' . '</form>' . '</div>';   	
		}		
	}
	
	    if ($row['comment'] == "") {
	        echo '<div class="empty" style="margin-top: 35px;">' . '<div class="emptyText">' . "Your updates are currently empty." . '</div>' . '</div>';
	    }      

?>
        
    </body>
</html>
