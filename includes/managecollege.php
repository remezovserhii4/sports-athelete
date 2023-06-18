<?php
	session_start();

    require_once "define.php";
 	require_once "../classes/pdo.class.php";
	$cmd = $_REQUEST['type'];

	function addcolleges($userid, $colleges, $sports, $scholarships, $interests){
		
		if (!isset($colleges))
			return;
		$db = new Database();
   			
		for($i = 0; $i < sizeof($colleges) ; $i++) {
			$createdate = date("Y-m-d H:i:s", time());
			$sql = "INSERT INTO usercollege (userid, collegeid, sport, scholar, interest, createdate) "
				."VALUES(:userid, :college, :sport, :scholar, :interest, :createdate)";
			
			$db->query($sql); 
							
			$db->bind(':userid', $userid);	
			$db->bind(':college', $colleges[$i]);	
			$db->bind(':sport', $sports[$i]);	
			$db->bind(':scholar', $scholarships[$i]);	
			$db->bind(':interest', $interests[$i]);	
			$db->bind(':createdate', $createdate);	
               
            $db->execute();		
    	}	
	
	}

	function deletelastcollege($userid){
		$db = new Database();	
		
		$sql = "SELECT id FROM usercollege WHERE userid=:userid ORDER BY id DESC LIMIT 1";
		$db->query($sql); 
		$db->bind(':userid', $userid);	
        $db->execute();	
        
        if ($db->rowCount()<= 0)
        	return;
        	
        $rows = $db->resultset();
               
        foreach($rows as $row){
			$sql = "DELETE FROM usercollege WHERE id=:cid";
			$db->query($sql); 
			
			$db->bind(':cid', $row['id']);	
	        $db->execute();				
		}
	}
	
	function deleteallcolleges($userid, $colleges){
		$db = new Database();	
		$sql = "DELETE FROM usercollege WHERE userid=:userid";
			
		$db->query($sql); 
						
		$db->bind(':userid', $userid);	
        $db->execute();			
	}
	
	function searchcollege($userid, $college){
		$db = new Database();   			
		$sql = "SELECT * FROM usercollege, college WHERE usercollege.collegeid = college.id AND college.title=:college AND userid=:userid";
		$db->query($sql); 
		$db->bind(':userid', $userid);	
		$db->bind(':college', $college);	
        $db->execute();	
        
        echo $db->rowCount();
	}
	
	function getnumberofcolloeges($userid){
		$db = new Database();   			
		$sql = "SELECT * FROM usercollege WHERE userid=:userid";
		$db->query($sql); 
		$db->bind(':userid', $userid);	

        $db->execute();	
        
        echo $db->rowCount();		
	}
	
	//
	switch ($cmd){
	//add colleges
	case 0:
		addcolleges($_REQUEST['user_id'], $_REQUEST['colleges'], $_REQUEST['sports'], $_REQUEST['scholarships'], $_REQUEST['interests']);
	break;
	
	//delte all
	case 1:
		deleteallcolleges($_REQUEST['user_id']);
	break;
	
	//delete last
	case 2:
		deletelastcollege($_REQUEST['user_id']);
	break;
	//find college	
	case 3:
		searchcollege($_REQUEST['user_id'], $_REQUEST['college']);
	
	break;	
	//retrieve number of colleges
	case 4:
		getnumberofcolloeges($_REQUEST['user_id']);
	
	break;		
	}

?>