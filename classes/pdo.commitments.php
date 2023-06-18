<?php
	require_once "pdo.class.php";
	
	Class Commitments extends Database{
		private $commitmessage;
		private $profileid;	
		private $updatedate;
		private $level;
		private $topcollege;
		private $percentage;
		
	    
		public function setprofile($profile){
			$this->profileid = $profile;
		}
		public function getprofile(){
			return $this->profileid;
		}
		
		public function setlevel($level){
			$this->level = $level;
		}
		public function getlevel(){
			return $this->level;
		}
		public function setpercentage($percentage){
			$this->percentage = $percentage;
		}
		public function getpercentage(){
			return $this->percentage;
		}
		public function settopcollege($topcollege){
			$this->topcollege = $topcollege;
		}
		public function gettopcollege(){
			return $this->topcollege;
		}					
		public function setcommitmessage($comment){
			$this->commitmessage = $comment;
		}
		public function getcommitmesage(){
			return $this->commitmessage;
		}
			
		public function getupdatedate(){
			return $this->updatedate;
		}
		//get the old comment from db by user id	
		public function getcommitinfo(){

	        $this->query("SELECT level,topcollege,percentage,commitmessage,updatecommit,college.title as commitcollege,college.image "
	        		."FROM commitments,college WHERE college.id=commitments.topcollege AND userid=:userid");
	        $this->bind(':userid', $this->getprofile());
	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				$error = "There was an error in your query: <br/><br/>" .$e;
			    return false;
	        }
	        return true;
		}	
		

		//create new comment
		public function createcommit(){
			
		$this->query("INSERT INTO commitments (userid, level, topcollege, percentage, commitmessage, createcommit, updatecommit) "
			." VALUES (:userid, :level, :topcollege, :percentage, :commitmessage, now(), now())");
			
			$this->bind(':userid', $this->getprofile());
			$this->bind(':level', $this->getlevel());
			$this->bind(':topcollege', $this->gettopcollege());
			$this->bind(':percentage', $this->getpercentage());
			$this->bind(':commitmessage', $this->getcommitmesage());

			
	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }	
		}
		
		//update the old comment
		public function updatecommit(){
			$this->query("UPDATE commitments SET "
					."commitmessage=:commitmessage,"
					."topcollege=:topcollege,level=:level,percentage=:percentage,"
					."updatecommit=now() WHERE userid=:userid");

			$this->bind(':userid', $this->getprofile());
			$this->bind(':level', $this->getlevel());
			$this->bind(':topcollege', $this->gettopcollege());
			$this->bind(':percentage', $this->getpercentage());
			$this->bind(':commitmessage', $this->getcommitmesage());

	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }				
		}
		
		//delete commit
		public function deletecommit(){
			$this->query("DELETE FROM commitments WHERE userid=:userid");

	        $this->bind(':userid', $this->getprofile());

	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }				
		}	
	}

?>
