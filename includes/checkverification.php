<?php
	session_start();
 	require_once "define.php";
 	require_once "../classes/pdo.class.php";

	if ($_POST['type'] == 'verify'){
		$sendcode = $_REQUEST['code'];
		//check whether sesssion exists
		if (!isset($_SESSION['sendcode']) || !isset($_SESSION['username'])){
			$result['ret'] = 0;
			$result['errormessage'] = "Please send verification code again";
			echo json_encode($result);
			return;  
		}
		//match values
		if ($_SESSION['sendcode'] == $_POST['code'] &&
			$_SESSION['username'] == $_POST['username']){
			unset($_SESSION['sendcode']);
			//session_unset('username');
			$_SESSION['verify'] = 1;	
			$result['ret'] = 1;
			echo json_encode($result);
			return;  
		} 
		if ($_SESSION['username'] != $_POST['username']){
			$result['ret'] = 0;
			$result['errormessage'] = "Username does not match";
		} else if  ($_SESSION['sendcode'] != $_POST['code']){
			$result['ret'] = 0;
			$result['errormessage'] = "Verification code does not match";
		}		
		
	} else if ($_POST['type'] == 'sendcode'){
		$username = $_REQUEST['username'];
		//if user name doesn't exist
		if (empty($username)){
			$result['ret'] = 0;
			$result['errormessage'] = "Please Enter Username";
			echo json_encode($result);
			return;
		}
		//get email address from db
		$db = new Database();
	    $db->query("SELECT email, password,level FROM users WHERE username=:username;");
	    $db->bind(':username', $username);

		try {
	    	$res = $db->single();
	    	if ($db->rowCount() == 0){
	    		$result['ret'] = 0;
				$result['errormessage'] = "User does not exist";
				echo json_encode($result);
				return;    		
			}
			//
			$emailaddr = $res['email'];
	    	
	    } catch(PDOException $e){
    		$result['ret'] = 0;
			$result['errormessage'] = "SQL error";
			echo json_encode($result);
			return;        
	        
	    }
		//make code
		$rnd = (string) mt_rand(111111, 999999);
				
		//send mail
		mail($emailaddr, "Prototyp", "Verification Code: ".$rnd);	 
	    
	    //save code to session
	    $_SESSION['sendcode'] = $rnd;  
	    $_SESSION['username'] = $username;
		$result['ret'] = 1;
		
	}


	echo json_encode($result);
	return;
?>