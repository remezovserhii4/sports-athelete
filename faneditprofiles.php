<?php
    session_start();
                    
    require_once "includes/define.php";
    require_once "classes/pdo.class.php";               
 
?>
<html>
    <head>
        <title>Update Profile</title>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    
    <style>
            html {
            font-family: 'Muli', sans-serif;
            background-color: white;
        }
        body {
            display: block;
            width: 100%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            margin-top: 0;
        }
    
        #loginContainer {
                display: block;
                width: 320px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                margin-top: 100px;
            }
                .topHeader {
                    display: block;
                    width: 320px;
                    height: 50px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0.5px;
                    text-align: center;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
                .middleSection {
                    display: block;
                    width: 320px;
                    height: auto;
                    overflow: auto;
                    background-color: #e0e0e0;
                }
                
                .errors {
                    display: block;
                    width: 275px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 35px;
                    margin-bottom: 20px;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    background-color: #e0e0e0;
                    color: black;
                    outline: none;
                    font-size: 12px;
                    font-family: 'Muli', sans-serif;
                    line-height: 20px;
                }
                .errors a {
                    display: block;
                    width: 140px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                    line-height: 35px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    text-align: center;
                    text-decoration: none;
                }
                .errors a:hover {
                    background-color: #1e90ff;
                }
@media only screen and (max-width: 900px) {
    #mainHeader {
            display: block;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            border-bottom: none;
        

}
    </style>    
       
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("mynavBar");
            if (x.className === "navBar") {
                x.className += " responsive";
            } else {
                x.className = "navBar";
            }
        }
    </script>
    </head>
    
    <body>

        <div id="loginContainer">
            <div class="topHeader">Update Profile</div>
            
            <div class="middleSection">
                <div class="errors">
                    <a href="#" onclick="history.back();">Return to Profile</a><br/>
<?php

    // Create connection
    $db = new Database();

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
            
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $db = new Database();
    

    if(!preg_match("/^[A-Z]'?[- a-zA-Z]+$/i", $_POST['fname'])){
        $error = 1;
        $errorMessage .= "&#8226; You have entered an incorrect first name.<br/><br/>";
    }

    if(!preg_match("/^[A-Z]'?[- a-zA-Z]+$/i", $_POST['lname'])){
        $error = 1;
        $errorMessage .= "&#8226; You have entered an incorrect last name.<br/><br/>";
    }

    if(!preg_match("/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/", $_POST['bdate'])){
        $error = 1;
        $errorMessage .= "&#8226; You have entered an incorrect birthdate.<br/><br/>";
    }
    
    if(!preg_match("/^[A-Z]'?[- a-zA-Z]+$/i", $_POST['city'])){
        $error = 1;
        $errorMessage .= "&#8226; You have entered an incorrect city name.<br/><br/>";
    }
    
    if(!preg_match("/^[A-Z]'?[- a-zA-Z]+$/i", $_POST['highschool'])){
        $error = 1;
        $errorMessage .= "&#8226; You have entered an incorrect high school name. Do not use numbers.<br/><br/>";
    }

    if($error){
        echo "There were some problems with your registration. Please correct the following problems:<br/><br/>";

    	echo $errorMessage;
        exit;
	}    
/*	
     $db->query("UPDATE users SET profileImage='".$_POST['profileImage']."',"
     							."fname='".$_POST['fname'] ."', "
     							."lname='".$_POST['lname'] ."',"
     							."bdate='".$_POST['bdate'] ."', "
     							."sex='". $_POST['sex']."',"
     							."primarysport='".$_POST['primarysport'] ."',"
     							."height='".$_POST['height'] ."',"
     							."weight='". $_POST['weight']."',"
     							."city='". $_POST['city']."',"
     							."state='".$_POST['state'] ."',"
     							."highschool='".$_POST['highschool'] ."',"
     							."coach='". $_POST['coach']."',"
     							."primposition='". $_POST['primposition']."',"
     							."secposition='". $_POST['secposition']."',"
     							."year='". $_POST['year']."',"
     							."gradyear='". $_POST['gradyear']."' "
     							."WHERE userid=".$_SESSION['userid'] );  
  */   							
     $db->query("UPDATE users SET profileImage=:profileImage,"
     							."fname=:fname, "
     							."lname=:lname,"
     							."bdate=:bdate, "
     							."sex=:sex,"
     							."primarysport=:primarysport,"
     							."height=:height,"
     							."weight=:weight,"
     							."city=:city,"
     							."state=:state,"
     							."highschool=:highschool,"
     							."coach=:coach,"
     							."primposition=:primposition,"
     							."secposition=:secposition,"
     							."year=:year,"
     							."gradyear=:gradyear "
     							."WHERE id=:userid");
          
    
	$db->bind('userid', $_SESSION['userid']);
    $db->bind('profileImage', $_POST['profileImage']);
    $db->bind('fname', $_POST['fname']);
    $db->bind('lname', $_POST['lname']);
    $db->bind('bdate', $_POST['bdate']);
    $db->bind('sex', $_POST['profilesex']);
    $db->bind('primarysport', $_POST['profilesport']);
    $db->bind('height', $_POST['height']);
    $db->bind('weight', $_POST['weight']);
    $db->bind('city', $_POST['city']);
    $db->bind('state', $_POST['profilestate']);
    $db->bind('highschool', $_POST['highschool']);
    $db->bind('coach', $_POST['coach']);
    $db->bind('primposition', $_POST['profileprimary']);
    $db->bind('secposition', $_POST['profilesecond']);
    $db->bind('year', $_POST['profileclass']);
    $db->bind('gradyear', $_POST['gradyear']);

	try {
    	$db->execute();
    } catch(PDOException $e){
    	echo "There was an error in your query: <br/><br/>" .$e;

    }
    
    echo "Your profile has been updated successfully";
    
    mysqli_close($conn);

?>

            
                </div>
            </div>
        </div>
    </body>
</html>

