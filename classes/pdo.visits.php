<?php
 	require_once "pdo.class.php";
 
	Class Visits extends Database{

		private $title;
		private $image;
			

		public function settitle($title){
			$this->title = $title;
		}	
		
		public function gettitle(){
			return $this->title;
		}	
			
		public function setimage($image){
			$this->image = $image;
		}
		
		public function getimage(){
			return $this->image;
		}

					
		//get the old comment from db by user id	
		public function getvisits(){

            $this->query("SELECT * FROM college");
        	try {
            	$this->execute();
            } catch(PDOException $e){
				$error = "There was an error in your query: <br/><br/>" .$e;
			    return false;
            }
            return true;
		}	
		
		//get the old comment from db by user id	
		public function getuservisits($userid){

            $this->query("SELECT college.id, college.title, college.image, uservisit.visitlevel, uservisit.visitdate "
            			." FROM uservisit,college WHERE uservisit.collegeid = college.id AND userid=:userid ORDER BY uservisit.id");
            $this->bind(':userid', $userid);
        	try {
            	$this->execute();
            } catch(PDOException $e){
				$error = "There was an error in your query: <br/><br/>" .$e;
			    return false;
            }
            return true;
		}
		//create new comment
		public function createvisit(){
			
 			$this->query("INSERT INTO college (title, image) VALUES (:title, :image)");
            $this->bind(':title', $this->gettitle());
			$this->bind(':image', $this->getimage());
        	try {
            	$this->execute();
            } catch(PDOException $e){
				echo "There was an error in your query: <br/><br/>" .$e;
			    exit;
            }	
		}
}

?>
