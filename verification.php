<?php
	session_cache_expire(10);
    session_start();

    require_once "includes/define.php";
 	require_once "classes/pdo.class.php";
 	
 	unset($_SESSION['sendcode']);
 	//session_unset('username');
 	
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Prototyp Verification</title>

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
         	$("#btnSendCode").on("click", function() {		
				
				console.log('click btnSendCode button');					
				//$("#btnSendCode").attr('disabled', true);
				if ($('#usernameReset').val() == ''){
					$('#txtstatus').html("Please Enter Username");
					$('#usernameReset').focus();
					return;
				}
				$('#txtstatus').html('Sending Email...');	
      			$.ajax({
					type: "POST",
					url: "includes/checkverification.php", 
					data: ({username : $('#usernameReset').val(), 
							type:'sendcode'}),
					cache: false,
					success: function(result)
					{	
						//alert(result);
						//$("#btnSendCode").attr('disabled', false);
						var res = JSON.parse(result);
						console.log("rsp:" + res);
						if (res.ret == 0){						
							$('#txtstatus').html(res.errormessage);		
							//$('#txtStatus').val(res.errormessage);						
							return;
						}
						$('#txtstatus').html('Email Sent Successfully');	
						//window.location.href = res.url;
					},
					error: function(result)
					{
						//$("#btnSendCode").attr('disabled', false);
						$('#txtstatus').html('Call btnSendCode failed!');						
					}
				});		
				
					
			});	
			
         	$("#btnVerify").on("click", function() {		
			
				console.log('click btnVerify button');					
				if ($('#usernameReset').val() == ''){
					$('#txtstatus').html("Please Enter Username");
					$('#usernameReset').focus();
					return;
				}
				if ($('#sendCode').val() == ''){
					$('#txtstatus').html("Please Enter Verification Code");
					$('#sendCode').focus();
					return;
				}
      			$.ajax({
					type: "POST",
					url: "includes/checkverification.php", 
					data: ({username : $('#usernameReset').val(), 
							code : $('#sendCode').val(), 
							type:'verify'}),
					cache: false,
					success: function(result)
					{	
						var res = JSON.parse(result);
						console.log("rsp:" + res);
						if (res.ret == 0){						
							$('#txtstatus').html(res.errormessage);							
							return;
						}						
						window.location.href = 'changepassword.php';
					},
					error: function(result)
					{
						$("#btnVerify").attr('disabled', false);
						$('#txtstatus').html('Call verification fail!');							
						//alert('Call btnVerify failed!');						
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
        <div class="topHeader">Reset Password</div>
    
    <div class="middleSection">
        <form accept-charset="utf-8">
            <span class="resetStep">Step #1:</span>
            <input type="text" id="usernameReset" name="username" placeholder="Enter Username" />
                <div class="bottomSection">
    	            <input type="button" class="submit" value="Send Code" name="submittype" id="btnSendCode"/>
    	        </div>
    	    <span class="resetStep">Step #2:</span>
            <input type="text" id="sendCode" name="sendcode" placeholder="Enter Verification Code" />
    	        <div class="bottomSection">
    	            <input type="button" class="submit" value="Verify" name="submittype" id="btnVerify"/>
    	        </div>
    	        <div class="requiredReset"><span id="txtstatus" ></span></div>
        </form>
    </div>
    
    <div class="footerSection">
        <a href="login.php" class="log">Return to Login</a>
    </div>
</div>

</body>
</html>
