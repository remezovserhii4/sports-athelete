

<!DOCTYPE html>
<html>
    <head>
        <title>Registration Errors</title>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="includes/regisLogin.css">
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        
        
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
            <div class="topHeader">Registration Errors</div>
            
            <a class="return" href="#" onclick="history.back();">Back to Registration</a><br/>
            
                <div class="errors">
                    
                    <?php
                        session_start();
                    
                        require_once "includes/define.php";
                     	require_once "classes/pdo.class.php";
                    
                        
                        // Create connection
                        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                    
                        $db = new Database();
                    
                        /* Check if user already logged in */
                        if(!empty($_SESSION['user_login'])){
                            Header("location: profile.php");
                            exit;
                        }
                        
                        if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['bdate']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['password2']) && empty($_POST['email']) && empty($_POST['level']) && empty($_POST['parental'])){
                                $error = 1;
                                $errorMessage .= "&#8226; You must complete the entire form.<br/><br/>";
                            }
                    
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
                    
                            /* Allow a-z, A-Z, 0-9, underscores and minus sign */
                            if(!preg_match("/^[a-zA-Z0-9_\-]+$/i", $_POST['username'])){
                            	$error = 1;
                                $errorMessage .= "&#8226; You have entered an incorrect username.<br/><br/>";
                            }
                    
                            if(strlen($_POST['username']) < 3 || strlen($_POST['username']) > 20){
                                $error = 1;
                                $errorMessage .= "&#8226; Please choose a username between 3 and 20 characters.<br/><br/>";
                            }
                    
                            if(strlen($_POST['password']) < 6){
                                $error = 1;
                                $errorMessage .= "&#8226; Please make sure your password is at least 6 characters long.<br/><br/>";
                            }
                    
                            if(!preg_match("/[a-zA-Z]/", $_POST['password']) || !preg_match("/\d/", $_POST['password']) || !preg_match("/[^a-zA-Z\d]/", $_POST['password'])){
                                $error = 1;
                                $errorMessage .= "&#8226; Please make sure your password has letter(s), number(s) and special character(s).<br/><br/>";
                            }
                    
                            if($_POST['password'] != $_POST['password2']){
                                $error = 1;
                                $errorMessage .= "&#8226; Please make sure both passwords are the same.<br/><br/>";
                            }
                    
                            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                $error = 1;
                                $errorMessage .= "&#8226; Please enter a valid email address.<br/><br/>";
                            }
                            
                            if($_POST['level'] == ""){
                                $error = 1;
                                $errorMessage .= "&#8226; A profile type must be selected.<br/><br/>";
                            }
                            
                            if(empty($_POST['fname']) || ($_POST['parental'] == "No")){
                                $error = 1;
                                $errorMessage .= "&#8226; You must have parental permission to join The Prototyp.<br/>";
                            }
                    
                            if($error){
                                echo "There were some problems with your registration. Please correct the following problems:<br/><br/>";
                    
                            	echo $errorMessage;
                                exit;
                            } else {
                                /* Get user IP address */
                                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    	            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    	            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                                } else {
                    	            $ipaddress = $_SERVER['REMOTE_ADDR'];
                                }
                                
                                $password = $_POST['password'];
                                
                                $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 11));
                    
                                $db->query("INSERT INTO users (fname, lname, bdate, username, password, email, ipaddress, level, parental, regdate) VALUES (:fname, :lname, :bdate, :username, :password, :email, :ipaddress, :level, :parental, now())");
                    
                                $db->bind(':fname', $_POST['fname']);
                                $db->bind(':lname', $_POST['lname']);
                                $db->bind(':bdate', $_POST['bdate']);
                                $db->bind(':username', $_POST['username']);
                                $db->bind(':password', $hash);
                                $db->bind(':email', $_POST['email']);
                                $db->bind(':ipaddress', $ipaddress);
                                $db->bind(':level', $_POST['level']);
                                $db->bind(':parental', $_POST['parental']);
                    
                            	try {
                                	$db->execute();
                                } catch(PDOException $e){
                    	            echo "There was an error in your query: <br/><br/>" .$e;
                    	            exit;
                                }
                    
                            }
                        
                        header('Location: login.php');
                                
                    ?>

                </div>
        </div>
        
    </body>
</html>