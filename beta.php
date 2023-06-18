<!DOCTYPE html>
<html>
    <head>
        <title>Beta Submission Errors</title>
        
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
    </head>
    
    <body>

    <div id="loginContainer">
            <div class="topHeader">Beta Testing</div>
    
            <div class="middleSection">
                <div class="errors">
                    <a href="#" onclick="history.back();">Return to Profile</a><br/>

    <?php
    
    session_start();
    
    require_once "includes/define.php";
    require_once "classes/pdo.class.php";
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
            $db = new Database();

            /* Check if user already logged in */
            if(!empty($_SESSION['beta'])){
	            Header("location: index.php");
	            exit;
            }

		            $db->query("INSERT INTO beta (emailBeta, betaupdate) VALUES (:emailBeta, now())");

		            $db->bind(':emailBeta', $_POST['emailBeta']);

	            	try {
		            	$db->execute();
		            } catch(PDOException $e){
			            echo "There was an error in your query: <br/><br/>" .$e;
			            exit;
		            }

	            
	           echo "Thank you for signing up for The Prototyp Beta Testing.<br /><br />
	           We are still months away from testing, but will keep you updated on its progress.";  
	                
            ?>

                </div>
            </div>
        </div>
    </body>
</html>