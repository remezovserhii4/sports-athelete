<?php
 	session_start(); 	
 	
 	unset($_SESSION['user']);
 	unset($_SESSION['verify']);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Prototyp Login</title>

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
         	$("#btnLogin").on("click", function() {		
				
				console.log('click Login button');					
				$("#btnLogin").attr('disabled', true);
				if ($('#usernameLog').val() == ''){
					$('#txtstatus').html("Please Enter Username");
					$('#usernameLog').focus();
					return;
				}
				if ($('#passwordLog').val() == ''){
					$('#txtstatus').html("Please Enter Password");
					$('#passwordLog').focus();
					return;
				}
      			$.ajax({
					type: "POST",
					url: "includes/checkuser.php", 
					data: ({username : $('#usernameLog').val(), 
							password:$('#passwordLog').val()}),
					cache: false,
					success: function(result)
					{	
						$("#btnLogin").attr('disabled', false);
						var res = JSON.parse(result);
						console.log("rsp:" + res);
						if (res.ret == 0){
							$('#txtstatus').html(res.errormessage);
							$('#usernameLog').val("");
							$('#passwordLog').val("");
							return;
						}
						
						window.location.href = res.url;
					},
					error: function(result)
					{
						$("#btnLogin").attr('disabled', false);
						$('#txtstatus').html('Call login failed!');						
					}
				});

				
				
					
			});	
		});
    </script>
</head>

<body>

    <div class="header">
        <?php include 'includes/header.html';?>
    </div>
    

<div id="loginContainer">
    <div class="topHeader">Prototyp Login</div>
    
    <div class="middleSection">
        <form accept-charset="utf-8">
            <input type="text" id="usernameLog" name="username" placeholder="Enter Username" required />
            <input type="password" id="passwordLog" name="password" placeholder="Enter Password" required />
            <div class="requiredLog">* All fields required for login</div>
            
	        <div class="bottomSection">
	            <input type="submit" class="submit" value="Login" id="btnLogin"/>
	        </div>
	        <div class="requiredReset"><span id="txtstatus" ></span></div>
        </form>
    </div>
    
    <div class="footerSection">
    	<a href="verification.php" class="log">Reset password</a>
        <a href="register.shtml" class="log">Not a Member? Register Here</a>
    </div>
</div>

</body>
</html>
