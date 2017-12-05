<?php
class userdata{
	public $username;
	public $userid;
	
	public function __construct($us,$id){
		$this->username=$us;
		$this->userid=$id;
		
			echo "user name is:{$this->username} and user id is: {$this->userid}";
		}
		public function __destruct(){
			
			unset($this->username);
			unset($this->userid);
		}
}
$userone=new userdata("cm","25");
?>