<?php
	session_start();
	
 	require_once "define.php";
 	require_once "../classes/pdo.class.php";
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$db = new Database();
    $password = $_POST['password'];	
    $db->query("SELECT id,password,level FROM users WHERE username=:username;");

    $db->bind(':username', $username);

	try {
    	$res = $db->single();
    	if ($db->rowCount() == 0){
    		$result['ret'] = 0;
    		$result['errormessage'] = 'Username or Password Incorrect';
    		echo json_encode($result);
    		return;
		}
		//
		$oldpassword = $res['password'];
		if (!password_verify($password, $oldpassword)) {
		    $result['ret'] = 0;
    		$result['errormessage'] = 'Username or Password Incorrect';		    
    		echo json_encode($result);
    		return;
		}
		
		$result['ret'] = 1;		
		if ($res['level'] == "Athlete Profile")		
			$result['url'] = "athleteprofile.php";
		else
			$result['url'] = "fanprofile.php";
    	
    	//$_SESSION['user_login'] = $username;
    	$_SESSION['username'] = $username;
    	$_SESSION['verify'] = 1;
        $_SESSION['userid'] = $res['id'];
    	
    } catch(PDOException $e){
    	$result['ret'] = 0;
    	$result['errormessage'] = "There was an error in your query: " .$e;		          
        
    }

	echo json_encode($result);
	return;
?>