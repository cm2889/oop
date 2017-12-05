<?php
class userdata{
	public $username;
	public $userid;
	const NAME ="Imam Hossain";
	public static $age="20";
	public function __construct($us,$id){
		$this->username=$us;
		$this->userid=$id;
		
			echo "user name is:{$this->username} and user id is: {$this->userid}";
		}
		 public  static function display(){
			 echo "Full name is :".userdata::NAME."<br/>";
			 echo "age is :".self::$age;
		 }
		
		public function __destruct(){
			
			unset($this->username);
			unset($this->userid);
		}
}
$userone=new userdata("cm","25");
echo "<br/>";
$userone->display();
userdata::display(); 
/*kono method jodi static korte chai method er name static and acces korte chaile class name and:: function diye korte pari*/
?>