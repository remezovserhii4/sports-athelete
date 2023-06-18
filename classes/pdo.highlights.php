<?php
	require_once "pdo.class.php";
	
	Class Hightlights extends Database{
		private $description;
		private $profileid;	
		private $title;
		private $highlight;
		private $id;
		
	    
		public function setprofile($profile){
			$this->profileid = $profile;
		}
		public function getprofile(){
			return $this->profileid;
		}
		public function setid($id){
			$this->id = $id;
		}
		public function getid(){
			return $this->id ;
		}		
		public function settitle($title){
			$this->title = $title;
		}
		public function gettitle(){
			return $this->title ;
		}
		public function setdescription($description){
			$this->description = $description;
		}
		public function getdescription(){
			return $this->description;
		}
		public function sethighlight($highlight){
			$this->highlight = $highlight;
		}
		public function gethighlight(){
			return $this->highlight;
		}					

		//get the old comment from db by user id	
		public function gethighlightinfo(){
  
	        $this->query("SELECT id,title, highlight, description "
	        	        ."FROM highlights WHERE userid=:userid ORDER BY createhighlight");
	        $this->bind(':userid', $this->getprofile());
	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				$error = "There was an error in your query: <br/><br/>" .$e;
			    return false;
	        }
	        return true;
		}	
		
		//get the old comment from db by user id	
		public function gethighlightcount(){
  
	        $this->query("SELECT title, highlight, description "
	        	        ."FROM highlights WHERE userid=:userid ORDER BY createhighlight");
	        $this->bind(':userid', $this->getprofile());
	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				$error = "There was an error in your query: <br/><br/>" .$e;
			    return 0;
	        }
	        return $this->rowCount();
		}
				

		//create new comment
		public function createhighlight(){
			
			$this->query("INSERT INTO highlights (userid, title, highlight, description, createhighlight) "
					." VALUES (:userid, :title, :highlight, :description, now())");
			
			$this->bind(':userid', $this->getprofile());
			$this->bind(':title', $this->gettitle());
			$this->bind(':highlight', $this->gethighlight());
			$this->bind(':description', $this->getdescription());
			
	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }	
		}
		
		//update the old comment
		public function updatehighlight(){
			$this->query("UPDATE highlights SET "
					."title=:title,"
					."highlight=:highlight,description=:description "
					."WHERE userid=:userid");

			$this->bind(':userid', $this->getprofile());
			$this->bind(':title', $this->gettitle());
			$this->bind(':highlight', $this->gethighlight());
			$this->bind(':description', $this->getdescription());

	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }				
		}
		
		//delete commit
		public function deletehighlights(){
			$this->query("DELETE FROM highlights WHERE userid=:userid");

	        $this->bind(':userid', $this->getprofile());

	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }				
		}
		//delete commit
		public function deletehighlight(){
			$this->query("DELETE FROM highlights WHERE id=:id");

	        $this->bind(':id', $this->getid());

	    	try {
	        	$this->execute();
	        } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
	        }				
		}			
	}

?>