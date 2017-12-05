<?php
class userdata{
	public $username;
	public $userid;
	
	
	public function __construct($us,$id){
		$this->username=$us;
		$this->userid=$id;
		
		                                }
		 public function display(){
			echo "username is {$this->username} and user id is {$this->userid} <br>";
								  }	
			}
			class admin extends userdata{
				public $level;
				public function display(){
			echo "username is {$this->username} and user id is {$this->userid} and level is {$this->level}";
								  }
			}
$userone=new userdata("cm","25");
echo "<br/>";
$userone->display();
$ad =new admin("imam", "43");
$ad->level="adminstator";
$ad->display();
?>