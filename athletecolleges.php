<?php
    session_start();
    
    require_once "includes/define.php";
    require_once "classes/pdo.colleges.php";
    
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>College Submission Errors</title>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        
        <style>
            html {
            font-family: Gotham Book, Verdana, Helvetica;
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
        #mainHeader {
            display: block;
            width: 100%;
            height: 40px;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
        }
            .leftLogo {
                display: inline-block;
                float: left;
                width: 140px;
                height: 30px;
                margin-top: 5px;
                margin-left: 25px;
            }
                .leftLogo img {
                    display: inline-block;
                    float: left;
                    width: 30px;
                    height: 30px;
                }
                .headerName {
                    display: inline-block;
                    float: left;
                    width: 100px;
                    height: 30px;
                    margin-left: 10px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 20px;
                    letter-spacing: 0.2px;
                    line-height: 32px;
                }
            .navContainer {
                display: inline-block;
                float: right;
                width: 500px;
                height: 30px;
                margin-top: 5px;
                margin-right: 25px;
            }
                .navBar {
                    display: inline-block;
                    float: right;
                    width: 500px;
                    height: 30px;
                    overflow: hidden;
                }
                .navBar a {
                    display: inline-block;
                    float: left;
                    width: 100px;
                    height: 30px;
                    font-size: 11px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    line-height: 32px;
                    text-decoration: none;
                    text-align: center;
                }
                .navBar a:hover {
                    color: #0077ea;
                }
                .navBar .icon {
                    display: none;
                }
        #loginContainer {
            display: block;
            width: 318px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            background-color: white;
            border: 1px solid #e0e0e0;
        }
            .topSection {
                display: block;
                width: 318px;
                height: 100px;
                background-color: white;
                overflow: auto;
            }
                .imageContainer {
                    display: block;
                    width: 265px;
                    height: 60px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    overflow: auto;
                }
                .imageContainer img {
                    display: inline-block;
                    float: left;
                    width: 60px;
                    height: 60px;
                }
                .topHeader {
                    display: inline-block;
                    float: left;
                    width: 190px;
                    height: 40px;
                    padding-left: 15px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 30px;
                    letter-spacing: 0.3px;
                    line-height: 40px;
                }
                .topSubheader {
                    display: inline-block;
                    float: left;
                    width: 190px;
                    height: 20px;
                    padding-left: 15px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 13px;
                    line-height: 20px;
                }
            .middleSection {
                display: block;
                width: 318px;
                height: auto;
                overflow: auto;
                background-color: white;
                }
                .errors {
                    display: block;
                    width: 275px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 10px;
                    margin-bottom: 20px;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    background-color: white;
                    color: black;
                    outline: none;
                    font-size: 12px;
                    font-family: Gotham Book, Verdana, Helvetica;
                    line-height: 20px;
                }
                .errors a {
                    display: block;
                    width: 275px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #1e90ff;
                    color: white;
                    font-size: 11px;
                    line-height: 37px;
                    text-decoration: none;
                    font-family: Gotham Book, Verdana, Helvetica;
                    border: none;
                    cursor: pointer;
                    text-align: center;
                }
                .errors a:hover {
                    background-color: #0077ea;
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
            .leftLogo {
                display: block;
                float: none;
                width: 140px;
                height: 30px;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
            }
        .navContainer {
            display: block;
            float: none;
            width: 320px;
            height: auto;
        }
            .navBar {
                display: block;
                width: 320px;
                height: 35px;
                margin-top: 30px;
            }
            .navBar a {
                display: inline-block;
                float: left;
                width: 270px;
                height: 35px;
                background-color: #1e90ff;
                color: white;
                font-size: 12px;
                line-height: 37px;
                text-align: center;
                font-family: Gotham Book, Verdana, Helvetica;
            }
            .navBar a:hover {
                color: white;
            }
            .navBar a:not(:first-child) {
                display: none;
            }
            .navBar a.icon {
                display: inline-block;
                float: left;
                width: 50px;
                text-align: center;
            }
            .navBar.responsive {
                display: block;
                width: 320px;
                height: auto;
                margin-top: 30px;
                position: relative;
            }
            .navBar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navBar.responsive a {
                float: none;
                display: block;
                width: 320px;
                height: 35px;
                border-bottom: 1px solid white;
                text-align: center;
                background-color: #1e90ff;
                color: white;
            }
            .navBar.responsive a:hover {
                background-color: #0077ea;
            }

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
<div id="mainHeader">
    <div class="leftLogo">
        <img src="images/proto-logo-30.png" alt="The Prototyp Logo"/>
        <span class="headerName">Prototyp</span>
    </div>
    <div class="navContainer">
        <div class="navBar" id="mynavBar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Members</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
</div>
        
        <div id="loginContainer">
            <div class="topSection">
                <div class="imageContainer">
                    <img src="images/proto-logo-60.png" />
                    <div class="topHeader">Prototyp</div>
                    <div class="topSubheader">For Athletes Everywhere</div>
                </div>
            </div>
                <div class="errors">
                            <a href="#" onclick="history.back();">Return to Profile</a><br/>

<?php

        
            $db = new Colleges();

            /* Check if user already logged in */
            if(!empty($_SESSION['colleges'])){
	            Header("location: profile.php");
	            exit;
            }
            
            if(empty($_POST['college1']) || empty($_POST['college2']) || empty($_POST['college3'])){
		            $error = 1;
		            $errorMessage = "- You must submit at least 3 college choices.<br/><br/>";
	            }
	            
	            if($error){
		            echo "There were some problems with your submission. Please correct the following problems:<br/><br/>";

	            	echo $errorMessage;
		            exit;
	            } else {


		            $db->query("INSERT INTO colleges (college1, college2, college3, college4, college5, college6, college7, college8, college9, college10, sports1, sports2, sports3, sports4, sports5, sports6, sports7, sports8, sports9, sports10, updated) VALUES (:college1, :college2, :college3, :college4, :college5, :college6, :college7, :college8, :college9, :college10, :sports1, :sports2, :sports3, :sports4, :sports5, :sports6, :sports7, :sports8, :sports9, :sports10, now())");

		            $db->bind(':college1', $_POST['college1']);
		            $db->bind(':college2', $_POST['college2']);
		            $db->bind(':college3', $_POST['college3']);
		            $db->bind(':college4', $_POST['college4']);
		            $db->bind(':college5', $_POST['college5']);
		            $db->bind(':college6', $_POST['college6']);
		            $db->bind(':college7', $_POST['college7']);
		            $db->bind(':college8', $_POST['college8']);
		            $db->bind(':college9', $_POST['college9']);
		            $db->bind(':college10', $_POST['college10']);
		            $db->bind(':sports1', $_POST['sports1']);
		            $db->bind(':sports2', $_POST['sports2']);
		            $db->bind(':sports3', $_POST['sports3']);
		            $db->bind(':sports4', $_POST['sports4']);
		            $db->bind(':sports5', $_POST['sports5']);
		            $db->bind(':sports6', $_POST['sports6']);
		            $db->bind(':sports7', $_POST['sports7']);
		            $db->bind(':sports8', $_POST['sports8']);
		            $db->bind(':sports9', $_POST['sports9']);
		            $db->bind(':sports10', $_POST['sports10']);

	            	try {
		            	$db->execute();
		            } catch(PDOException $e){
			            echo "There was an error in your query: <br/><br/>" .$e;
			            exit;
		            }

	            }
	            
	           echo "Your 'Top College Choices' list has been created";  
	                
?>

                </div>
            </div>
        </div>
    </body>
</html>