<?php
	session_start();

    require_once "define.php";
 	require_once "../classes/pdo.class.php";
	$cmd = $_REQUEST['type'];

	function addvisits($userid, $colleges, $visitlevel, $visitdate){
		
		if (!isset($colleges))
			return;
		$db = new Database();
   			
		for($i = 0; $i < sizeof($colleges) ; $i++) {
			$createdate = date("Y-m-d H:i:s", time());
			$sql = "INSERT INTO uservisit (userid, collegeid, visitlevel, visitdate) "
				."VALUES(:userid, :college, :visitlevel, :visitdate, :createdate)";
			
			$db->query($sql); 
							
			$db->bind(':userid', $userid);	
			$db->bind(':college', $colleges[$i]);	
			$db->bind(':visitlevel', $visitlevel[$i]);	
			$db->bind(':visitdate', $visitdate[$i]);	
			$db->bind(':createdate', $createdate);	
               
            $db->execute();		
    	}	
	
	}

	function deletelastcollege($userid){
		$db = new Database();	
		
		$sql = "SELECT id FROM uservisit WHERE userid=:userid ORDER BY id DESC LIMIT 1";
		$db->query($sql); 
		$db->bind(':userid', $userid);	
        $db->execute();	
        
        if ($db->rowCount()<= 0)
        	return;
        	
        $rows = $db->resultset();
               
        foreach($rows as $row){
			$sql = "DELETE FROM uservisit WHERE id=:cid";
			$db->query($sql); 
			
			$db->bind(':cid', $row['id']);	
	        $db->execute();				
		}
	}
	
	function deleteallvisits($userid, $colleges){
		$db = new Database();	
		$sql = "DELETE FROM uservisit WHERE userid=:userid";
			
		$db->query($sql); 
						
		$db->bind(':userid', $userid);	
        $db->execute();			
	}
	
	function searchvisit($userid, $college){
		$db = new Database();   			
		$sql = "SELECT * FROM uservisit, college WHERE uservisit.collegeid = college.id AND college.title=:college AND userid=:userid";
		$db->query($sql); 
		$db->bind(':userid', $userid);	
		$db->bind(':college', $college);	
        $db->execute();	
        
        echo $db->rowCount();
	}
	
	function getnumberofvisits($userid){
		$db = new Database();   			
		$sql = "SELECT * FROM uservisit WHERE userid=:userid";
		$db->query($sql); 
		$db->bind(':userid', $userid);	

        $db->execute();	
        
        echo $db->rowCount();		
	}
	
	//
	switch ($cmd){
	//add colleges
	case 0:
		addvisits($_REQUEST['user_id'], $_REQUEST['colleges'], $_REQUEST['visitlevel'], $_REQUEST['visitdate']);
	break;
	
	//delte all
	case 1:
		deleteallvisits($_REQUEST['user_id']);
	break;
	
	//delete last
	case 2:
		deletelastvisit($_REQUEST['user_id']);
	break;
	//find college	
	case 3:
		searchvisit($_REQUEST['user_id'], $_REQUEST['college']);
	
	break;	
	//retrieve number of colleges
	case 4:
		getnumberofvisits($_REQUEST['user_id']);
	
	break;		
	}

?>