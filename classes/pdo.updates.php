<?php
 	require_once "pdo.class.php";
 
	Class Updates extends Database{
		
		//0623 klose
		private $profileid;	
		private $updatedate;
		private $comment;
			

		public function setprofile($profile){
			$this->profileid = $profile;
		}
		public function getprofile(){
			return $this->profileid;
		}		
		public function setcomment($comment){
			$this->comment = $comment;
		}
		
		public function getupdatedate(){
			return $this->updatedate;
		}
		public function getcomment(){
			return $this->comment;
		}
					
		//get the old comment from db by user id	
		public function getcommentinfo(){

            $this->query("SELECT * FROM updates WHERE userid=:userid");
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
		public function createcomment(){
			
 			$this->query("INSERT INTO updates (userid, comment, createcomment, updatecomment) VALUES (:userid, :comment, now(), now())");
            $this->bind(':comment', $this->getcomment());
			$this->bind(':userid', $this->getprofile());
        	try {
            	$this->execute();
            } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
            }	
		}
		
		//update the old comment
		public function updatecomment(){
 			$this->query("UPDATE updates SET  comment=:comment, updatecomment=now() WHERE userid=:userid");

            $this->bind(':comment', $this->getcomment());
            $this->bind(':userid', $this->getprofile());

        	try {
            	$this->execute();
            } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
            }				
		}
		
		//delete comment
		public function deletecomment(){
 			$this->query("DELETE FROM updates WHERE userid=:userid");

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
