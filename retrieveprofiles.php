<html>
    <head>
        <title></title>
        
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		
        <style>
            .profileTop {
                display: block;
                width: 320px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                overflow: hidden;
            }
                .profileImage {
                    display: block;
                    width: 320px;
                    height: 250px;
                    background-color: #e0e0e0;
                }
                .profileName {
                    display: block;
                    width: 320px;
                    height: 35px;
                    font-family: 'Muli', sans-serif;
                    color: #3b3b3b;
                    font-size: 16px;
                    font-weight: 400;
                    text-align: center;
                    line-height: 40px;
                    letter-spacing: 0.3px;
                }
                .athleteVitals {
                    display: block;
                    width: 320px;
                    height: 20px;
                    padding-top: 0px;
                    font-family: 'Muli', sans-serif;
                    color: #3b3b3b;
                    font-size: 12px;
                    font-weight: 400;
                    text-align: center;
                    line-height: 20px;
                    letter-spacing: 0.2px;
                }
            .profileMiddle {
                display: block;
                width: 320px;
                height: 25px;
                margin-top: 15px;
                margin-left: auto;
                margin-right: auto;
                background-color: #006ad1;
                font-family: 'Muli', sans-serif;
                color: white;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 0.2px;
                text-align: center;
                line-height: 25px;
            }
        .catContainer {
            display: block;
            width: 320px;
            height: auto;
            margin-top: 15px;
            overflow: auto;
        }
                .category {
                    display: block;
                    width: 280px;
                    height: 25px;
                    margin-left: auto;
                    margin-right: auto;
                    font-family: 'Muli', sans-serif;
                    color: #3b3b3b;
                    font-size: 11px;
                    font-weight: 600;
                    letter-spacing: 0.1px;
                    text-align: left;
                    line-height: 25px;
                }
                .retrieveProfiles {
                    display: block;
                    width: 320px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 0px;
                }
                #toggle5 {
                    display: block;
                    width: 150px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 25px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    text-align: center;
                    text-decoration: none;
                    letter-spacing: 0.5px;
                    line-height: 35px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                #toggle5:hover {
                    background-color: #1e90ff;
                }
                #toggle5.active.focus,
                #toggle5.active:focus,
                #toggle5.focus,
                #toggle5.focus:active,
                #toggle5:active:focus,
                #toggle5:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                #targetAthlete {
                    display: block;
                    width: 150px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 25px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    text-align: left;
                    text-decoration: none;
                    letter-spacing: 0.5px;
                    line-height: 35px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                #targetAthlete:hover {
                    background-color: #1e90ff;
                }
                #targetAthlete.active.focus,
                #targetAthlete.active:focus,
                #targetAthlete.focus,
                #targetAthlete.focus:active,
                #targetAthlete:active:focus,
                #targetAthlete:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                #targetAthlete img {
                    display: inline-block;
                    float: left;
                    margin-left: 20px;
                    padding-top: 7.5px;
                    padding-right: 5px;
                }
                #reset2 {
                    display: inline-block;
                    float: left;
                    width: 130px;
                    height: 35px;
                    margin-top: 15px;
                    margin-bottom: 15px;
                    margin-left: 0px;
                    border: none;
                    border-radius: 0px;
                    background-color: #e0e0e0;
                    font-family: 'Muli', sans-serif;
                    text-decoration: none;
                    text-align: center;
                    font-size: 11px;
                    line-height: 32px;
                    color: black;
                    box-shadow: none;
                    outline: 0;
                    cursor: pointer;
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
                    
            // Create connection
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            //Klose
			// compile SQL
            $sql = "SELECT * FROM users";
            $sql .= " WHERE id=".$_SESSION['userid'];
            //execute query
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
            	//it must be 1 item
                while($row = mysqli_fetch_assoc($result)) {

	        	echo '<div class="profileTop">' . 
	                    '<div class="profileImage">' . '<img src="'.$row['profileImage'].'" />' . '</div>' .
	                    '<div class="profileName">' . $row['fname'] . " " . $row['lname'] . '</div>' .
	                    '<div class="athleteVitals">' 
	                    	. $row['sex'] . "&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp" 
	                    	. $row['height'] . " in.&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp"
	                    	. $row['weight'] . " lbs." . '</div>' .
	                    '</div>' .
	                    '<div class="athleteVitals">' 
	                    	. $row['city'] . ", " . $row['state'] . 
	                    '</div>' .
	                    
	                    '<div class="profileMiddle">' . "Member Info" . '</div>';
	                    
	                    echo '<div class="catContainer">' .
	                    '<div class="category">' . "Sport (Positions):&nbsp&nbsp" . $row['primarysport'] . " (" . $row['primposition'] . ", " . $row['secposition'] . ")" . '</div>' .
	                    '<div class="category">' . "High School:&nbsp&nbsp" . $row['highschool'] . '</div>' .
	                    '<div class="category">' . "Head Coach:&nbsp&nbsp" . $row['coach'] . '</div>' .
	                    '<div class="category">' . "Graduation Year:&nbsp&nbsp" . $row['gradyear'] . " (" . $row['year'] . ")" . '</div>' .
	                    '<div class="category">' . "Member Since:&nbsp&nbsp" . $row['regdate'] . '</div>' .
	                '</div>';
	                $user_row = $row;
                }
                    
                    echo '<div class="retrieveProfiles">' . '<form name="newItem" id="newItem">' . '<a id="toggle5" href="javascript:toggle5();">Edit Profile</a>' . '<div id="showHide">' . '</div>' . '</form>' . '</div>';
                    
                    echo '<div class="retrieveProfiles">' . '<a id="targetAthlete"><img src="images/target-icon-20.png" />Target Recruit</a>' . '</div>';
                    
                

                }
            
            mysqli_close($conn);
        ?>
        
    </body>
</html>
