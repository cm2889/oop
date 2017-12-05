<?php
class userdata{
	public $username;
	public $userid;
	const NAME ="Imam Hossain";
	
	public function __construct($us,$id){
		$this->username=$us;
		$this->userid=$id;
		
			echo "user name is:{$this->username} and user id is: {$this->userid}";
		}
		 public function display(){
			 echo "Full name is :".userdata::NAME;
		 }
		
		public function __destruct(){
			
			unset($this->username);
			unset($this->userid);
		}
}
$userone=new userdata("cm","25");
echo "<br/>";
$userone->display();
?>