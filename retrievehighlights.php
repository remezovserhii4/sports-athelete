<html>
    <head>
        <title></title>
        
    </head>
    <style>
        .rowTitle {
            display: block;
            width: 290px;
            height: 25px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            font-size: 12px;
            font-weight: 600;
            font-family: 'Muli', sans-serif;
            letter-spacing: 0.3px;
            text-align: center;
            color: #3b3b3b;
        }
        .rowHighlight {
            display: block;
            width: 290px;
            height: 55px;
            margin-left: auto;
            margin-right: auto;
            border-bottom: 1px solid #9e9e9e;
        }
        .rowDescription {
            display: inline-block;
            float: left;
            width: 220px;
            height: auto;
            margin-left: 0px;
            padding: 10px;
            font-size: 10px;
            font-family: 'Muli', sans-serif;
            letter-spacing: 0.2px;
            color: #3b3b3b;
        }
                        #hide_2 {
                            display: inline-block;
                            float: left;
                            width: 35px;
                            height: 35px;
                            margin-left: 15px;
                        }
                    #btnDeleteHighlight {
                            display: inline-block;
                            float: left;
                            width: 35px;
                            height: 35px;
                            margin-left: 15px;
                            margin-top: 10px;
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
                        #btnDeleteHighlight:hover {
                            background-color: #e53d00;
                            color: white;
                        }
    </style>
    <body>
        <?php
            session_start();
                    
            require_once "includes/define.php";
            require_once "classes/pdo.highlights.php";
                    
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
 			$db = new Hightlights();   
 			
 			$db->setprofile($_SESSION['userid']);
 			$db->gethighlightinfo();
    		if ($db->rowCount()>0){
    			$info = $db->resultset();
    			foreach ($info as $row) {
                    echo '<div class="rowTitle">' . $row['title'] . '</div>' . 
                    	 '<div class="rowVideo">' . 
                    	 	'<iframe width="290" height="163" src="https://www.youtube.com/embed/'.$row['highlight']. '"frameborder="0"></iframe>' . 
                    	 '</div>' . 
                    	 '<div class="rowHighlight">' . '<div class="rowDescription">'.$row['description'].'</div>' . '<div class="hide_2">' . '<form action="deletehighlights.php" method="post">' . '<input type="hidden" id="videoid" name="videoid" value="'. $row['id'] .'" />' . '<button type="reset2" id="btnDeleteHighlight">-</button>' . '</form>' . '</div>' . '</div>';
				
				}
				echo '<input type="hidden" id="idhighlightsnum" value="'.$db->rowCount() .'"/>';
    			
			}
			
			if ($row['highlight'] == "") {
                    echo '<div class="empty" style="margin-top: 15px;">' . '<div class="emptyText">' . "Your highlight reel is currently empty." . '</div>' . '</div>';
                }
        ?>
        
    </body>
</html>