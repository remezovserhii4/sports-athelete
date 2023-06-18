<?php
 	session_start(); 	
    require_once "includes/define.php";
 	require_once "classes/pdo.class.php";
 	$error = 0;	
 	if (!isset($_SESSION['verify']) || 
 		$_SESSION['verify'] != 1 ||
 		empty($_SESSION['username']) ){
 		echo "You need to verify your account!";
 		return;		
	}
	if ($_POST['submit'] =='Update'){
	 	//check whether password matches
	 	$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		if (empty($newpassword)){
			$errorMessage = "Please make sure password is correct<br/><br/>";
			$error = 1;
		} else if ($newpassword != $confirmpassword)
		{
			$errorMessage = "Please make sure both passwords match<br/><br/>";
			$error = 1;
			//header('location: changepassword.php');
		} else if(strlen($newpassword) < 6){
           $errorMessage = "Please make sure your password is at least 6 characters long.<br/><br/>";
           $error = 1;
        } else if(!preg_match("/[a-zA-Z]/", $newpassword) || 
           !preg_match("/\d/", $newpassword) || 
           !preg_match("/[^a-zA-Z\d]/", $newpassword)){
           $errorMessage = "Please make sure your password has letter(s), number(s) and special character(s).<br/><br/>";
           $error = 1;
        }  
        
        if ($error == 0){
			$hash = password_hash($newpassword, PASSWORD_BCRYPT, array("cost" => 11));
		 	//update database
			$db = new Database();
		    $db->query("UPDATE users SET password=:password WHERE username=:username;");
		    $db->bind(':username', $_SESSION['username']);
		    $db->bind(':password', $hash);

			try {
		    	$db->execute();
		    	
		    } catch(PDOException $e){
		        
		    }		
			header('location: login.php');			
		}

	}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Update Password</title>

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
        
        $(document).ready(function () {
         	
		});
    </script>
</head>

<body>

<div class="header">
        <?php include 'includes/header.html';?>
    </div>

    <div id="loginContainer">
        <div class="topHeader">Update Password</div>
    
    <div class="middleSection">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
            <input type="password" id="newpassword" name="newpassword" placeholder="New Password" />
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" />
            <div ><span id="txtstatus" class="requiredChange"><?php echo $errorMessage; ?></span></div>
	        <div class="bottomSection">
	            <input type="submit" class="submit" name="submit" value="Update" id="btnUpdatePassword"/>
	        </div>
        </form>
    </div>
    
    <div class="footerSection">
        <a href="login.php" class="log">Go to login page</a>
    </div>
</div>

</body>
</html>
